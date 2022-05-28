<?php

namespace App\Http\Controllers\Home;

use App\Models\User;
use App\Models\Emergency;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class EmergencyController extends Controller
{
    public function index()
    {
        $emergencies = Emergency::all();
        $users  =  User::where('id','!=',auth()->user()->id)->get();

        return view('home.emergencies.emergencies', ['emergencies' => $emergencies, 'users' => $users]);
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $emergency = Emergency::find($id);
        $users  =  User::where('id','!=',auth()->user()->id)->get();
        return view('home.emergencies.show_emergency',['emergency'=>$emergency, 'users' => $users]);
    }

    public function show_sick($id)
    {
        $emergency = Emergency::find($id);
        $users  =  User::where('id','!=',auth()->user()->id)->get();
        return view('home.emergencies.show_sick',['emergency'=>$emergency, 'users' => $users]);
    }
}
