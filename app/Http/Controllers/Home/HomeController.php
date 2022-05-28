<?php

namespace App\Http\Controllers\Home;

use App\Models\User;
use App\Models\Actulity;
use App\Models\ChatRoom;
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

        $chat =  [];
        $users  =  User::where('id','!=',auth()->user()->id)->get();
        if(ChatRoom::where('user1_id',auth()->user()->id)->exists()){
            $chatroom = ChatRoom::where('user1_id',auth()->user()->id)->orderBy('created_at', 'asc')->get();
 
           foreach($chatroom as $key=>$value){
            array_push($chat,$value );
        }
           
        }
        if (ChatRoom::where('user2_id',auth()->user()->id)->exists()){
            
           $chatroom = ChatRoom::where('user2_id',auth()->user()->id)->orderBy('created_at', 'asc')->get();
          //  array_push($chat, ChatRoom::where('user2_id',auth()->user()->id)->orderBy('created_at', 'asc')->get('id'));
            foreach($chatroom as $key=>$value){
                array_push($chat,$value );
            }
        }
        
        $actualities = Actulity::where('user_id', auth()->user()->id)->get();
        $users  =  User::where('id','!=',auth()->user()->id)->get();
        return view('home.index', ['actualities'=>$actualities,'users'=>$users, 'chatroom'=>count($chat)]);
    }


}
