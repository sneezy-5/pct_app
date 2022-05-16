<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Actulity;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $actualities = Actulity::where('user_id', auth()->user()->id)->get();
        return view('home.index', ['actualities'=>$actualities]);
    }


}
