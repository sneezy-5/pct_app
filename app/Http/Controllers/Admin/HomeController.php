<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use App\Models\Message;
use App\Models\Actulity;
use App\Models\ChatRoom;
use App\Models\Emergency;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
 
        $chatroom = ChatRoom::where('user2_id',auth()->user()->id)->orderBy('created_at', 'asc')->get();
        $actualities = Actulity::all();
        $emergencies = Emergency::count();
        $users = User::count();
        $actualitycount = $actualities->count();
        return view('admin.dashboard',['actualities'=>$actualitycount,'emergencies'=>$emergencies,'actualitycount'=>$actualitycount, 'user'=>$users, 'chat'=>$chatroom]);
        
    }


}
