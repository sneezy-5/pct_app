<?php

namespace App\Http\Controllers\Home;

use App\Models\Service;
use App\Models\Emergency;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\User;

class ServiceController extends Controller
{
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $services = Service::all();
        $users  =  User::where('id','!=',auth()->user()->id)->get();
        return view('home.services.services', ['services'=>$services, 'users'=>$users]);
    }



    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $service = Service::find($id);
        return view('home.services.show_service',['service'=>$service]);
    }

  
}
