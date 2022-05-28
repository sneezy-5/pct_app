<?php

namespace App\Http\Controllers\Home;

use App\Models\Ded;
use App\Models\User;
use App\Models\Actulity;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DedController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       // $deds = Actulity::where('type','deces')->get();
       $deds = Ded::orderBy('id', 'DESC')->get();
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
