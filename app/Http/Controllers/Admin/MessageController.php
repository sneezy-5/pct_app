<?php

namespace App\Http\Controllers\Admin;

use Exception;
use App\Models\User;
use App\Models\Message;
use App\Models\ChatRoom;
use Illuminate\Http\Request;
use App\Models\UnreadMessage;
use App\Events\ChatMessageEvent;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Event;

class MessageController extends Controller
{
    public function index()
    {
        $data = collect();
        
        $users  =  User::where('id','!=',auth()->user()->id)->get();

        $chatroom = ChatRoom::where('user2_id',auth()->user()->id)->orderBy('created_at', 'asc')->get();


        for($i=0; $i<$chatroom->count(); $i++){
            $data->push([
                'room_message'=>Message::where('chat_room_id', [$chatroom[$i]->id])->first(),
                'user'=>User::where('id', [auth()->user()->id== $chatroom[$i]->user1_id ? $chatroom[$i]->user2_id : $chatroom[$i]->user1_id])->first()->name,
               // 'room_id'=>User::where('id', [auth()->user()->id== $chatroom[$i]->user1_id ? $chatroom[$i]->user2_id : $chatroom[$i]->user1_id])->first()->id,
                //'room_id'=>Message::where('chat_room_id', [$chatroom[$i]->id])->first()->chat_room_id,
                'room_id'=>$chatroom[$i]->id
                
            ]);

        }
        


       // dd($data);
        return view('admin.messages.messages',['chatrooms'=>$data, 'users'=>$users,'chat'=>$chatroom->count() ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
  
    public function store(Request $request)
    {
         

           $data = $request->except('_token'); 
            
           //event( new chatMesssageEvent(auth()->user()->name, $request->message));

           Event::dispatch(new ChatMessageEvent(auth()->user()->name, $request->content));
        
        $data['user_id']= auth()->user()->id;
        
        Message::create($data);

  
        
        $url = "/message"."/".$request['chat_room_id'];
        return redirect($url);
        //return response()->json(['succes'=>'message send']);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($room_id)
    {
        $data = collect();
        $users  =  User::where('id','!=',auth()->user()->id)->get();
       
       // $chatroom = User::where('id', auth()->user()->id)->first()->chat_room()->orderBy('created_at', 'asc')->get();
       $chatroom = ChatRoom::where('user2_id',auth()->user()->id)->orderBy('created_at', 'asc')->get();

        for($i=0; $i<$chatroom->count(); $i++){
            $data->push([
                'room_message'=>Message::where('chat_room_id', [$chatroom[$i]->id])->first(),
                'user'=>User::where('id', [auth()->user()->id== $chatroom[$i]->user1_id ? $chatroom[$i]->user2_id : $chatroom[$i]->user1_id])->first()->name,
               // 'room_id'=>User::where('id', [auth()->user()->id== $chatroom[$i]->user1_id ? $chatroom[$i]->user2_id : $chatroom[$i]->user1_id])->first()->id,
                //'room_id'=>Message::where('chat_room_id', [$chatroom[$i]->id])->first()->chat_room_id,
                'room_id'=>$chatroom[$i]->id
            ]);

        }

        $messages = Message::where('chat_room_id', [$room_id])->get();
        $messageroom = User::where('id', auth()->user()->id)->first()->message()->orderBy('created_at', 'asc')->first();
        $user2 = ChatRoom::find($room_id)->user1_id == auth()->user()->id ? ChatRoom::find($room_id)->user2_id : ChatRoom::find($room_id)->user1_id;

        $user2info = User::find($user2);

        return view('admin.messages.show_message',['messages'=>$messages, 'chatrooms'=>$data, 'room_id'=>$room_id, 'message_room'=>$messageroom, 'user2'=>$user2info, 'users'=>$users]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }


    public function create_or_return_private_chat( Request $request, $room){
        $payload = [];

        if (auth()){
            $user2_id = $request['user2_id'];

            $user2 = User::find($user2_id);

        }

    }


    public function find_or_create_private_chat($user1, $user2){
   
}
}
