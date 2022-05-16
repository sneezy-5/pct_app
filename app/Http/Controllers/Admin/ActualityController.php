<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use App\Models\Actulity;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Notifications\ActualityNotiication;
use App\Notifications\SendNotification;

class ActualityController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $actualities = Actulity::all();

        return view('admin.actuality.actualities',['actualities'=>$actualities]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.actuality.actuality');
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
                 //dd($path);
            }

           
        // Else add a dummy image
        else {
            $fileNameToStore = 'noimage.jpg';
             $path = 'noimage.jpg';
            $data['image']=$fileNameToStore;
            //dd($path);
            }

           
        $data['user_id']= auth()->user()->id;
        $data['user_name']= auth()->user()->name;
         //dd($fileNameToStore);

         $actuality = Actulity::create($data);
         $users = User::all();
         //auth()->user()->notify(new SendNotification($subejct));
         foreach($users as $user){
             $user->notify(new ActualityNotiication($actuality));
         }
       return redirect()->route('admin.actuality.index');
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
        return view('admin.actuality.show_actuality',['actuality'=>$actuality]);
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
        return view('admin.actuality.edit_actuality',['actuality'=>$actuality]);
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

          $data = $request->except('_token', '_method'); 

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
            $data['image']= Actulity::find($id)->image;
            }

            
       
        $data['user_id']= auth()->user()->id;
        $data['user_name']= auth()->user()->name;
         //dd($data);

        Actulity::find($id)->update($data);

       return redirect()->route('admin.actuality.index');
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

       return redirect()->route('admin.actuality.index');
    }

}

