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
        $input = $request->all();
        // dd($input);

        $urlId = strtr(base64_encode(openssl_random_pseudo_bytes(5)), "+/=", "XXX");
        $meeting = new Meeting;
        $meeting->url_id = $urlId;
        $meeting->user_name = $input['name'];
        $meeting->user_email = $input['email'];
        $meeting->title = $input['title'];
        $meeting->description = $input['description'];
        $meeting->status = 'yellow';
        $meeting->save();

        foreach($input['dates'] as $date) {
            $dates = new Dates;
            $dates->url_id = $urlId;
            $dates->date = $date;
            $dates->save();
        }

        $emailTo = $input['emailinvite'];
        $meetingTitle = '"' . $input['title'] . '"';
        $meetingLink = 'http://localhost:8000/' . $urlId;
        $meetingOwner = $input['name'];

        $mailContent = 'You have been invited to a meeting with' . ' ' . $meetingOwner . '.' . 'To schedule this meeting visit this link:' . $meetingLink;

        Mail::raw($mailContent, function ($message) use($emailTo, $meetingLink, $meetingTitle) {
            $message->from('miit.io.email@gmail.com', 'Miit.io');
            $message->to($emailTo, ' ');
            $message->subject('You have been invited to a meeting on Miit.io');
        });

        return redirect('createdmeetingsuccess');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    // lägg tillbaka $id när det är dags för databaskoppling
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

    public function dashboard()
    {
        return view('dashboard');
    }

    //retunerar successpage när ett möte har skapats
    public function createdMeetingSuccess()
    {
        return view('createdsuccess');
    }
}
