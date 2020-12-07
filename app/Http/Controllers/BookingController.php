<?php

namespace App\Http\Controllers;

use App\Mail\CourseConfirmation;
use App\Models\Course;
use App\Models\Participant;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

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
        if ($this->check_course($course)) {
            return $this->check_course($course);
        }

        return view('booking.create', compact('course'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Course $course, Request $request)
    {
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

        Participant::create([
            'course_id' => $course->id,
            'lastname' => $request->lastname,
            'firstname' => $request->firstname,
            'date_of_birth' => $request->date_of_birth,
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
            ->send(new CourseConfirmation($course, $request));

        return view('booking.finish', compact('course'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
        } elseif (($course->seats - count($course->participants)) <= 0 || ! $course->bookable) { // full or not bookable
            // TODO make redirect
            return 'not bookable';
        }
    }
}
