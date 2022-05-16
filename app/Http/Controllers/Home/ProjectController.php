<?php

namespace App\Http\Controllers\Home;

use App\Models\User;
use App\Models\Project;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $projects = Project::all();
         $users  =  User::where('id','!=',auth()->user()->id)->get();
         
        return view('home.projects.projects', ['projects'=>$projects, 'users'=>$users]);
    }

    
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $project = Project::find($id);
        return view('home.projects.show_project',['project'=>$project]);
    }

   
}
