<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use ZammadAPIClient\Client;
use ZammadAPIClient\ResourceType;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('contact');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $ticket_id = false;
        $error_msg = false;

        $client = new Client([
            'url'        => env('ZAMMAD_URL'),
            'http_token' => env('ZAMMAD_TOKEN'),
            // 'timeout'       => 15,                  // Sets timeout for requests, defaults to 5 seconds, 0: no timeout
            //'debug'         => true,                // Enables debug output
        ]);

        $ticket_data = [
            'group_id'    => 1, // Group 'PrevHelp - Allgemein'
            'priority_id' => 2,
            'state_id'    => 1,
            'title'       => $request->subject,
            'customer_id' => "guess:$request->email",
            'type'        => 'email',
            'article'     => [
                'type_id' => 1,
                'from'    => $request->name.' <'.$request->email.'>',
                'to'      => 'PrevHelp Support',
                'subject' => $request->subject,
                'body'    => $request->message,
                'content_type' => 'text/html',
                'type'    => 'email',
                'sender'  => 'Customer',
            ],
        ];

        $ticket = $client->resource(ResourceType::TICKET);
        $ticket->setValues($ticket_data);
        $ticket->save();

        if ($ticket->hasError()) {
            $error_msg = $ticket->getError();
        } else {
            $ticket_id = $ticket->getValue('number');
        }

        return view('contact', compact('ticket_id', 'error_msg'));
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
