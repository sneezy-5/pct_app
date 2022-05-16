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
}
