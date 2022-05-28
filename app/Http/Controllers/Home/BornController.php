<?php

namespace App\Http\Controllers\Home;

use App\Models\Born;
use App\Models\User;
use App\Models\Actulity;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BornController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$borns = Actulity::where('type','naissance')->get();
        $borns = Born::orderBy('id', 'DESC')->get();
        $users  =  User::where('id','!=',auth()->user()->id)->get();

        return view('home.borns.borns',['borns'=>$borns, 'users'=>$users]);
    }

    

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $born = Actulity::find($id);
        return view('home.borns.show_born',['born'=>$born]);
    }

    }