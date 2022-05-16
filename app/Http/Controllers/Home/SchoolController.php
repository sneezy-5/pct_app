<?php

namespace App\Http\Controllers\Home;

use App\Models\User;
use App\Models\School;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SchoolController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $school = School::all();
        $users  =  User::where('id','!=',auth()->user()->id)->get();
        
        return view('home.schools.schools', ['schools'=>$school, 'users'=>$users]);
    }

    
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $school = School::find($id);
        return view('home.schools.show_school',['school'=>$school]);
    }

    
}
