<?php

namespace App\Http\Controllers;


use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Meeting;
use App\Dates;
use Auth;
use Form;
use App\User;
use Request;


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

    // lägg tillbaka $id när det är dags för databaskoppling
        public function dashboard()
    {
    //     // $meeting = Meeting::where('', '=', $id)->get();

    //     // $dates = array();
    //     // array_push($dates, $meeting[0]->dates);

    //     // // return $meeting;
    //     // // return $dates;
    //     // return view('dashboard', compact('meeting', 'dates'));

    $user = Auth::user();


    $meeting = Meeting::where('user_email', '=', $user->email)->get();

    return view('dashboard', compact('meeting', 'user'));

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
        $user = User::findOrFail($id);

        $user->name = Request::get('name');
        $user->email = Request::get('email');
        $user->password = Request::get('password');

        $user->save();

        return redirect('dashboard')->withMessage('User information was updated');

        //return Request::all();
        
       // return $user;

        //return Request::get('name');


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
