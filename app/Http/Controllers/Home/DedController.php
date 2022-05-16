<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Actulity;
use App\Models\User;

class DedController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $deds = Actulity::where('type','deces')->get();
        $users  =  User::where('id','!=',auth()->user()->id)->get();
        return view('home.deds.deds',['deds'=>$deds, 'users'=>$users]);
    }

   
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
         $ded = Actulity::find($id);
        return view('home.deds.show_ded',['ded'=>$ded]);
    }

    
}
