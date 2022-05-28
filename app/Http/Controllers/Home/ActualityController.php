<?php

namespace App\Http\Controllers\Home;

use App\Models\User;
use App\Models\Comment;
use App\Models\Message;
use App\Models\Actulity;
use App\Models\ChatRoom;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Notifications\ActualityNotiication;

class ActualityController extends Controller
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

        $actualities = Actulity::orderBy('id', 'DESC')->get();
        $comment = collect();
        $users  =  User::where('id','!=',auth()->user()->id)->get();
        $data = collect();

       
        $chatroom = User::where('id', auth()->user()->id)->first()->chat_room()->orderBy('created_at', 'asc')->get();



        for($i=0; $i<$chatroom->count(); $i++){
            
            $data->push([
                'room_message'=>Message::where('chat_room_id', [$chatroom[$i]->id])->first(),
                'user'=>User::where('id', [auth()->user()->id== $chatroom[$i]->user1_id ? $chatroom[$i]->user2_id : $chatroom[$i]->user1_id])->first()->name,
                //'count'=>Message::where('chat_room_id', [$chatroom[$i]->id])->first()->
                'room_id'=>$chatroom[$i]->id
            ]);

        }

        return view('home.actualities',['actualities'=>$actualities, 'users'=>$users, 'messages'=>$data,'chatroom'=>count($chat)]);
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

           $request->validate([
            '_token' => ['required'],
            'title' => ['required', 'string'],
            
        ]);

           $data = $request->except('_token'); 

           //dd($data);

         if ($request->hasFile('image')) {
            $filenameWithExt = $request->file('image')->getClientOriginalName ();
            // Get Filename
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            // Get just Extension
            $extension = $request->file('image')->getClientOriginalExtension();
            // Filename To store
            $fileNameToStore = $filename. ''. time().'.'.$extension;
            // Upload Image
            $path = $request->file('image')->storeAs('public/image', $fileNameToStore);
            $data['image']=$fileNameToStore;
            }

           
          // Else add a dummy image
        else {
            $fileNameToStore = 'noimage.jpg';
             $path = 'noimage.jpg';
            $data['image']=$path;
            }

            
            

        
        $data['user_id']= auth()->user()->id;
        $data['user_name']= auth()->user()->name;
        $data['type']= 'other';
         //dd($data);

         $actuality = Actulity::create($data);
         $users = User::all();

         foreach($users as $user){
             $user->notify(new ActualityNotiication($actuality));
         }
        
       return redirect('/');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $actuality = Actulity::find($id);
        return view('home.show_actuality',['actuality'=>$actuality]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $actuality = Actulity::find($id);
        return view('home.edit_actuality',['actuality'=>$actuality]);
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
              $request->validate([
            '_token' => ['required'],
            'title' => ['required', 'string'],
            
        ]);

              $data = $request->except('_token'); 

         if ($request->hasFile('image')) {
            $filenameWithExt = $request->file('image')->getClientOriginalName ();
            // Get Filename
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            // Get just Extension
            $extension = $request->file('image')->getClientOriginalExtension();
            // Filename To store
            $fileNameToStore = $filename. ''. time().'.'.$extension;
            // Upload Image
            $path = $request->file('image')->storeAs('public/image', $fileNameToStore);
            $data['image']=$fileNameToStore;
            
            }

           
        // Else add a dummy image
        else {
            $fileNameToStore = 'noimage.jpg';
             $path = 'noimage.jpg';
               // $data['image']=$fileNameToStore;
            }


        
        $data['user_id']= auth()->user()->id;
        $data['user_name']= auth()->user()->name;
        $data['type']= 'other';
        // dd($data);

        Actulity::find($id)->update($data);

       return redirect()->route('.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
          Actulity::find($id)->delete();

       return redirect()->route('index');
    }


    //retun actualities comments
    public function commant_ajax($post_id){
        $comments = Actulity::find($post_id)->comment;

        return response()->json(['comments'=>$comments]);
    }

     //retun actualities comments
     public function info_village(){

        
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
    
            $actualities = Actulity::orderBy('id', 'DESC')->get();
            $comment = collect();
            $users  =  User::where('id','!=',auth()->user()->id)->get();
            $data = collect();
    
           
            $chatroom = User::where('id', auth()->user()->id)->first()->chat_room()->orderBy('created_at', 'asc')->get();
    
    
    
            for($i=0; $i<$chatroom->count(); $i++){
                
                $data->push([
                    'room_message'=>Message::where('chat_room_id', [$chatroom[$i]->id])->first(),
                    'user'=>User::where('id', [auth()->user()->id== $chatroom[$i]->user1_id ? $chatroom[$i]->user2_id : $chatroom[$i]->user1_id])->first()->name,
                    //'count'=>Message::where('chat_room_id', [$chatroom[$i]->id])->first()->
                    'room_id'=>$chatroom[$i]->id
                ]);
    
            }

            
        $actualities = Actulity::where('type','info_village')->get();

        return view('home.infovillage',['actualities'=>$actualities, 'users'=>$users, 'messages'=>$data,'chatroom'=>count($chat)]);
    }
}
