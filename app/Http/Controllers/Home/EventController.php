<?php

namespace App\Http\Controllers\Home;

use App\Models\User;
use App\Models\Event;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $events = Event::all();
        $users  =  User::where('id','!=',auth()->user()->id)->get();
        return view('home.events.events',['events'=>$events, 'users'=>$users]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $event = Event::find($id);
        return view('home.events.show_event',['event'=>$event]);
    }

    
}
