<?php

namespace App\Http\Controllers\Home;

use App\Models\User;
use App\Models\Pharmacy;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PharmacyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pharmacies = Pharmacy::where('is_active',0)->get();
        $users  =  User::where('id','!=',auth()->user()->id)->get();
        $pharmacieDeGarde = Pharmacy::where('is_active',1)->get();

        return view('home.pharmacies.pharmacies', ['pharmacies'=>$pharmacies, 'users'=>$users, 'degarde'=>$pharmacieDeGarde]);
    }


       public function show($id)
    {
         $pharmacy = Pharmacy::find($id);
        return view('home.pharmacies.show_pharmacy',['pharmacy'=>$pharmacy]);
    }

    public function pharDegarde()
    {
       $pharmacieDeGarde = Pharmacy::where('is_active',0)->get();

        return view('admin.pharmacies.pharmacie', ['pharmacies'=>$pharmacieDeGarde]);
    }
}
