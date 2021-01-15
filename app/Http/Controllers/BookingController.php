<?php

namespace App\Http\Controllers;

use App\Mail\CourseConfirmation;
use App\Models\Course;
use App\Models\Participant;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Mollie\Laravel\Facades\Mollie;
use Srmklive\PayPal\Services\ExpressCheckout;

class BookingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Display a listing of the resource.
     *
     * @param $location
     * @return Application|Factory|View|\Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function location($location)
    {
        session()->flush(); // clear old data
        $courses = Course::where([
            ['location', $location],
            ['start', '>', Carbon::now()],
            ['bookable', 1],
        ])
            ->with('course_types')
            ->with('prices')
            ->with('participants')
            ->orderBy('start')
            ->get();

        return view('booking', compact('courses', 'location'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @param Course $course
     * @return \Illuminate\Contracts\View\View
     */
    public function create(Course $course)
    {
        // TODO make better error message
        if ($this->check_course($course)) {
            return $this->check_course($course);
        }

        return view('booking.create', compact('course'));
    }

    public function pay(Course $course, Request $request)
    {
        // TODO make better error message
        if ($this->check_course($course)) {
            return $this->check_course($course);
        }

        // abort if price id is not for this course
        abort_unless(isset($course->prices->pluck('price', 'id')[$request->price]), 403);

        session([$this->validate($request, [
            'payment' => 'required',
            'price' => 'required|integer',
            'lastname' => 'required|min:3',
            'firstname' => 'required|min:3',
            'date_of_birth' => 'required|date|before:today',
            'street' => 'required|min:3',
            'house_number' => 'required',
            'zipcode' => 'required',
            'location' => 'required|min:3',
            'phone' => 'required',
            'email' => 'required|email',
        ])]);

        session(['course' => $course]);

        if ($request->payment == 'paypal') {
            $data = [];

            $data['items'] = [
                [
                    'name'  => __($course['course_types'][0]['name']),
                    'price' => $course->prices->pluck('price', 'id')[$request->price],
                    'qty'   => 1,
                ],
            ];

            $data['return_url'] = route('paypal.confirm', ['course' => $course]);
            $data['cancel_url'] = route('paypal.abort', ['course' => $course]);

            // TODO remove
            $data['invoice_id'] = uniqid();
            $data['invoice_description'] = __($course['course_types'][0]['name']);

            $data['total'] = $course->prices->pluck('price', 'id')[$request->price];

            $provider = new ExpressCheckout();

            if ($request->session()->has('PayerID') && $request->session()->has('token')) {
                $response = $provider->getExpressCheckoutDetails($request->session()->get('token'));

                if (in_array(strtoupper($response['ACK']), ['SUCCESS', 'SUCCESSWITHWARNING'])) {
                    if ($response['AMT'] == $data['total'] && $response['PAYERID'] == $request->session()->get('PayerID')) {
                        // shortcut to the checkout
                        return redirect(route('event.checkout', ['course' => $course]), 303);
                    }
                }
                // otherwise, delete wrong data
                $request->session()->forget('token', 'PayerID');
            }

            $response = $provider->setExpressCheckout($data);

            return redirect($response['paypal_link'], 303);
        } else {
            $request->session()->forget('token', 'PayerID'); // prevent payment change

            return redirect(route('event.checkout', ['course' => $course]), 303);
        }
    }

    public function checkout(Course $course, Request $request)
    {
        $data = $request->session()->all()[0];

        return view('booking.checkout', compact('course', 'data'));
    }

    public function correct(Course $course, Request $request)
    {
        return redirect(route('event.book', ['course' => $course]))->withInput(session()->all()[0]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Course $course
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Http\Response|\Illuminate\Routing\Redirector
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Course $course, Request $request)
    {
        $this->validate($request, [
            'terms' => 'accepted',
            'cancellationPolicy' => 'accepted',
            'dataProtection' => 'accepted',
        ]);

        // abort if price id is not for this course
        abort_unless(isset($course->prices->pluck('price', 'id')[$request->session()->get(0)['price']]), 403);

        $payed = false;
        $transaction_id = null;

        if ($request->session()->get('token') && $request->session()->get('PayerID')) {
            $data = [];

            $data['items'] = [
                [
                    'name'  => __($course['course_types'][0]['name']),
                    'price' => $course->prices->pluck('price', 'id')[$request->session()->get(0)['price']],
                    'qty'   => 1,
                ],
            ];

            // TODO remove
            $data['invoice_id'] = uniqid();
            $data['invoice_description'] = __($course['course_types'][0]['name']);

            $data['total'] = $course->prices->pluck('price', 'id')[$request->session()->get(0)['price']];

            $provider = new ExpressCheckout();

            $token = $request->session()->get('token');
            $PayerID = $request->session()->get('PayerID');

            $payment_status = $provider->doExpressCheckoutPayment($data, $token, $PayerID);

            if ($payment_status['PAYMENTINFO_0_PAYMENTSTATUS'] == 'Completed') {
                $payed = true;
            }

            $transaction_id = $payment_status['PAYMENTINFO_0_TRANSACTIONID'];
        }

        $data = $request->session()->all()[0];

        $participant = Participant::create([
            'course_id' => $course->id,
            'lastname' => $data['lastname'],
            'firstname' => $data['firstname'],
            'date_of_birth' => Carbon::create($data['date_of_birth'])->format('Y-m-d'),
            'street' => $data['street'].' '.$data['house_number'],
            'zipcode' => $data['zipcode'],
            'location' => $data['location'],
            'phone' => $data['phone'],
            'email' => $data['email'],
            'rating' => $request->rating,
            'price' => $course->prices->pluck('price', 'id')[$data['price']],
            'price_id' => $data['price'],
            'payed' => $payed,
            'transaction_id' => $transaction_id,
        ]);

        session()->flush(); // delete the session data

        // send BCC to trustpilot if rating is allowed
        if ($request->rating) {
            $bcc = env('TRUSTPILOT_EMAIL');
        } else {
            $bcc = false;
        }

        Mail::to($data['email'])
            ->bcc($bcc ? $bcc : []) // auto rate invitation
            ->send(new CourseConfirmation($course, $request, $participant));

        return redirect(route('event.success', ['course' => $course]), 303);
    }

    /**
     * Display the specified resource.
     *
     * @param $course
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|void
     */
    public function success($course)
    {
        return view('booking.finish', compact('course'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    private function check_course($course)
    {
        if (Carbon::now() > Carbon::create($course->start)) { // Course is already started
            // TODO make redirect
            return 'running';
        } elseif (! $course->bookable) { // not bookable
            return response()->view('booking.not-bookable', compact('course'))->setStatusCode(410);
        } elseif (($course->seats - count($course->participants)) <= 0) { // sold out
            return response()->view('booking.sold-out', compact('course'))->setStatusCode(410);
        } else {
            return;
        }
    }
}
