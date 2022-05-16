<?php

namespace App\Http\Controllers\Home;

use App\Models\User;
use App\Models\Actulity;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MaryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $maries = Actulity::where('type','mariage')->get();
        $users  =  User::where('id','!=',auth()->user()->id)->get();
        
        return view('home.maries.maries',['maries'=>$maries, 'users'=>$users]);
    }

    

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
         $mary = Actulity::find($id);
        return view('home.maries.show_mary',['mary'=>$mary]);
    }

    
}
