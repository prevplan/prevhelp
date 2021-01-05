<?php

namespace App\Http\Controllers;

use App\Mail\CourseConfirmation;
use App\Models\Course;
use App\Models\Participant;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Mollie\Laravel\Facades\Mollie;

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
     * @return Application|Factory|View
     */
    public function location($location)
    {
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

        return $courses;

        // return view('booking.location', compact('company', 'courses', 'location'));
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

    /**
     * Store a newly created resource in storage.
     *
     * @param Course $course
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Course $course, Request $request)
    {
        //   return $request;

        // TODO make better error message
        if ($this->check_course($course)) {
            return $this->check_course($course);
        }

        $this->validate($request, [
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
            'terms' => 'accepted',
            'cancellationPolicy' => 'accepted',
            'dataProtection' => 'accepted',
        ]);

        // abort if price id is not for this course
        abort_unless(isset($course->prices->pluck('price', 'id')[$request->price]), 403);

        $participant = Participant::create([
            'course_id' => $course->id,
            'lastname' => $request->lastname,
            'firstname' => $request->firstname,
            'date_of_birth' => Carbon::create($request->date_of_birth)->format('Y-m-d'),
            'street' => $request->street.' '.$request->house_number,
            'zipcode' => $request->zipcode,
            'location' => $request->location,
            'phone' => $request->phone,
            'email' => $request->email,
            'rating' => $request->rating,
            'price' => $course->prices->pluck('price', 'id')[$request->price],
            'price_id' => $request->price,
        ]);

        // send BCC to trustpilot if rating is allowed
        if ($request->rating) {
            $bcc = env('TRUSTPILOT_EMAIL');
        } else {
            $bcc = false;
        }

        Mail::to($request->email)
            ->bcc($bcc ? $bcc : []) // auto rate invitation
            ->send(new CourseConfirmation($course, $request, $participant));

        if ($request->payment == 'online') {
            $payment = Mollie::api()->payments->create([
                'amount' => [
                    'currency' => $course->prices->pluck('currency', 'id')[$request->price],
                    'value' => $course->prices->pluck('price', 'id')[$request->price], // You must send the correct number of decimals, thus we enforce the use of strings
                ],
                'description' => __($course['course_types'][0]['name']),
                'redirectUrl' => route('event.success', ['course' => $course]),
                'webhookUrl' => route('webhooks.mollie'),
                'metadata' => [
                    'participant_id' => $participant->id,
                ],
            ]);

            // redirect customer to Mollie checkout page
            return redirect($payment->getCheckoutUrl(), 303);
        } else {
            return redirect(route('event.success', ['course' => $course]), 303);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param $course
     * @return void
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
        } elseif (!$course->bookable) { // not bookable
            return view('booking.not-bookable', compact('course'));
        } elseif (($course->seats - count($course->participants)) <= 0) { // sold out
            return view('booking.sold-out', compact('course'));
        } else {
            return;
        }
    }
}
