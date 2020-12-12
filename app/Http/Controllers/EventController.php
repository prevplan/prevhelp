<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Distance;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('events');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @param Request $request
     * @return Request
     */
    public function search(Request $request)
    {
        $request->validate([
            'city' => 'required|alpha',
        ]);

        return redirect(route('event.location', ['location' => $request->city]));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @param Request $request
     * @return Request
     */
    public function location($location, Request $request)
    {
        // get all courses
        $course = Course::where([
            ['start', '>', Carbon::now()],
            ['bookable', 1],
        ])
            ->select('location')
            ->groupBy('location')
            ->get();

        // get saved distances
        $distanceData = Distance::whereIn(
            'seminarLocation', $course
        )
            ->where('participantLocation', $location)
            ->get();

        // get the distance for all seminarLocations
        $i = 0;
        foreach ($course as $c) {
            $searchValue = $this->localDistance($c['location'], $distanceData);

            if ($searchValue) { // get a result in database
                $distance[$i]['seminarLocation'] = $c['location'];
                $distance[$i]['distance'] = $searchValue['distance'];
            } else { // get the distance from the web
                $distance[$i]['seminarLocation'] = $c['location'];
                $distance[$i]['distance'] = $this->getDistance($c['location'], $location);

                if ($distance[$i]['distance'] == 0 && $c['location'] != $location) { // Wrong distance
                    return redirect(route('event.overview'))->withErrors(['location' => $location.' wurde in unserer Datenbank nicht gefunden. Bitte versuche einen anderen Ort oder eine Stadt in der Nähe.']);
                }
            }
            $i++;
        }

        function array_sort_by_column(&$arr, $col, $dir = SORT_ASC)
        {
            $sort_col = [];
            foreach ($arr as $key=> $row) {
                $sort_col[$key] = $row[$col];
            }

            array_multisort($sort_col, $dir, $arr);
        }

        array_sort_by_column($distance, 'distance');

        $courses = Course::query();
        $result = false;

        foreach ($distance as $d) {
            if ($d['distance'] <= 20 && ! $request['custom'] || $d['seminarLocation'] == $request[str_replace(' ', '_', $d['seminarLocation'])]) {
                $courses->orWhere([
                    ['location', '=', $d['seminarLocation']],
                    ['start', '>', Carbon::now()],
                    ['bookable', 1],
                ])
                    ->with('course_types')
                    ->with('prices')
                    ->with('participants');
                $result = true;
            }
        }

        if ($result) {
            $courses = $courses->orderBy('start')->get();
        } else {
            $courses = [];
        }

        return view('booking', compact('courses', 'distance', 'location', 'request'));
    }

    // look in our database
    private function localDistance($seminarLocation, $array)
    {
        foreach ($array as $key => $val) {
            if ($val['seminarLocation'] === $seminarLocation) {
                $resultSet['seminarLocation'] = $val['seminarLocation'];
                $resultSet['participantLocation'] = $val['participantLocation'];
                $resultSet['distance'] = $val['distance'];
                $resultSet['id'] = $val['id'];

                return $resultSet;
            }
        }

        return null;
    }

    // get the distance from a web service
    private function getDistance($seminarLocation, $participantLocation)
    {
        $response = Http::get('https://www.distance24.org/route.json?stops='.$seminarLocation.'|'.$participantLocation);
        //  dd ($response->json('distance'));
        $distance = $response->json('distance');

        if ($distance > 0 || $seminarLocation == $participantLocation) { // distance is correct
            // safe the new distance
            Distance::create([
                'seminarLocation' => $seminarLocation,
                'participantLocation' => $participantLocation,
                'distance' => $distance,
            ]);
        }

        return $distance;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
}
