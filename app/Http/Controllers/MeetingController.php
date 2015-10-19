<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Meeting;
use App\Dates;
use Mail;

class MeetingController extends Controller
{

    public function homepage()
    {
        return view('homepage');
    }

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
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create_meeting');
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

    //hämtar ett specifikt möte
    public function show($id)
    {
        $meeting = Meeting::where('url_id', '=', $id)->get();

        $dates = array();
        array_push($dates, $meeting[0]->dates);

        // return $meeting;
        // return $dates;
        return view('meeting', compact('meeting', 'dates'));
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

    //visar dashboard
    public function dashboard()
    {
        return view('dashboard');
    }

    //hämtar ett specifikt möte i json-format
    public function showjson($id)
    {
        $meeting = Meeting::where('url_id', '=', $id)->get();

        $dates = array();
        array_push($dates, $meeting[0]->dates);

        return $meeting;
    }

    //Hämtar rätt möte och datum som ska bokas. Skickar sedan ett mail till ägaren av mötet som informerar
    //om att mötet är bokat och vilken tid.
    public function sendMail($urlId, $bookedDate) 
    {
        $meeting = Meeting::where('url_id', '=', $urlId)->get();
        $emailTo = $meeting[0]['user_email'];
        $emailName = $meeting[0]['user_name'];
        $meetingTitle = '"' . $meeting[0]['title'] . '"';

        $mailContent = 'Your meeting' . ' ' . $meetingTitle . ' ' . 'is scheduled at' . ' ' . $bookedDate;

        Mail::raw($mailContent, function ($message) use($emailTo, $emailName, $meetingTitle) {
            $message->from('miit.io.email@gmail.com', 'Miit.io');
            $message->to($emailTo, $emailName);
            $message->subject('Your meeting' . ' ' . $meetingTitle . ' ' . 'is scheduled!');
        });

        $meeting[0]->status = 'green';
        $meeting[0]->save();

        return redirect('meetingsuccess');
    }

    //retunerar successpage när ett möte har bokats
    public function meetingSuccess() 
    {
        return view('success');
    }
}
