<?php

namespace App\Http\Controllers\Home;

use Exception;
use App\Models\User;
use App\Models\Message;
use App\Models\ChatRoom;
use Illuminate\Http\Request;
use App\Models\UnreadMessage;
use App\Events\ChatMessageEvent;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Event;

class MessageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = collect();
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
         
        for($i=0; $i< count($chat); $i++){
            $data->push([
                'room_message'=>Message::where('chat_room_id', [$chat[$i]->id])->first(),
                'user'=>User::where('id', [auth()->user()->id== $chat[$i]->user1_id ? $chat[$i]->user2_id : $chat[$i]->user1_id])->first()->name,
                'user_pic'=>User::where('id', [auth()->user()->id== $chat[$i]->user1_id ? $chat[$i]->user2_id : $chat[$i]->user1_id])->first()->picture,
                'room_id'=>$chat[$i]->id
            ]);

        }

       //dd($chat);
        return view('home.messages.messages',['chatrooms'=>$data, 'users'=>$users]);
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

        // if(ChatRoom::where('user1_id',auth()->user()->id)->exists()){
        //     $user2 = ChatRoom::where('user1_id',auth()->user()->id)->first()->user2_id;

        //     if( User::find($user2)){
        //         $data_unread = [];
        //         $data_unread['most_recent_message']=$request['content'];
        //         $data_unread['user_id']=$user2;
        //         $data_unread['room']=$request['chat_room_id'];
        //         $data_unread['count']=1;
        //         UnreadMessage::create($data_unread);
        //     }
           
            
        // }
        // elseif (ChatRoom::where('user2_id',auth()->user()->id)->exists()){
            
        //     $user2 = ChatRoom::where('user2_id',auth()->user()->id)->first()->user1_id;
            
        //     if( User::find($user2)){
        //         $data_unread = [];
        //         $data_unread['most_recent_message']=$request['content'];
        //         $data_unread['user_id']=$user2;
        //         $data_unread['room']=$request['chat_room_id'];
        //         $data_unread['count']=1;
        //         UnreadMessage::create($data_unread);
        //     }
        // }
        
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
       
        $chat =  [];
        
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
         
        for($i=0; $i< count($chat); $i++){
            $data->push([
                'room_message'=>Message::where('chat_room_id', [$chat[$i]->id])->first(),
                'user'=>User::where('id', [auth()->user()->id== $chat[$i]->user1_id ? $chat[$i]->user2_id : $chat[$i]->user1_id])->first()->name,
                'user_pic'=>User::where('id', [auth()->user()->id== $chat[$i]->user1_id ? $chat[$i]->user2_id : $chat[$i]->user1_id])->first()->picture,
                'room_id'=>$chat[$i]->id
            ]);

        }


        $messages = Message::where('chat_room_id', [$room_id])->get();
        $messageroom = User::where('id', auth()->user()->id)->first()->message()->orderBy('created_at', 'asc')->first();
        $user2 = ChatRoom::find($room_id)->user1_id == auth()->user()->id ? ChatRoom::find($room_id)->user2_id : ChatRoom::find($room_id)->user1_id;

        $user2info = User::find($user2);

        return view('home.messages.show_message',['messages'=>$messages, 'chatrooms'=>$data, 'room_id'=>$room_id, 'message_room'=>$messageroom, 'user2'=>$user2info, 'users'=>$users]);
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


    public function create_or_return_private_chat( Request $request){
        $payload = [];
        $user1 = auth()->user()->id;
        if (auth()->check()){
            $user2_id = $request['user2_id'];

            $user2 = User::find($user2_id)->id;

  
				$chat = $this->find_or_create_private_chat($user1, $user2);
				
				$payload['response'] = "Successfully got the chat.";
				$payload['chatroom_id'] = $chat;

        }
    else{
		$payload['response'] = "You can't start a chat if you are not authenticated.";
    }
	return response()->json($payload);

    }


    public function find_or_create_private_chat($user1, $user2){

       // $chat = ChatRoom::where('user1_id','user2_id',[$user1,$user2])->get();

        if(ChatRoom::where('user1_id',$user1)->where('user2_id',$user2)->exists()){
            $chat = ChatRoom::where('user1_id',$user1)->where('user2_id',$user2)->first();
            //$data = ['user1_id'=>"dd", 'dfe'=>"dd"];
            return $chat;
           
        }
        elseif (ChatRoom::where('user1_id',$user2)->where('user2_id',$user1)->exists()){
            
            $chat = ChatRoom::where('user1_id',$user2)->where('user2_id',$user1)->first();
           // $data = ['user1_id'=>"dd", 'user2_id'=>"dd"];
            return $chat;
        }
        else{
            $data = ['user1_id'=>$user1, 'user2_id'=>$user2];
            $chat = ChatRoom::create($data);
            return $chat;
            }
    // try{
    //     $chat = ChatRoom::where('user1','user2',[$user1,$user2])->get();
    // }
    // catch (Exception $th){

    //     try{
    //         $chat = ChatRoom::find('user1','user2', [$user2,$user1]);
    //     }
    //     catch (Exception $th){
    //         $data = ['user1_id'=>$user1, 'user2_id'=>$user2];
    //         $chat = ChatRoom::create($data);
    //         //$chat->save();
    //     }
    // }
    
}
}
