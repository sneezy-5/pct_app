<?php

namespace App\Http\Controllers\Home;

use App\Models\Job;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class JobController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $jobs = Job::all();
        $users  =  User::where('id','!=',auth()->user()->id)->get();

        return view('home.jobs.jobs',['jobs'=>$jobs, 'users'=>$users]);
    }

   
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $job = Job::find($id);
        return view('home.jobs.show_job',['job'=>$job]);
    }

    
}
