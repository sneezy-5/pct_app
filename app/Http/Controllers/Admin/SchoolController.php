<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\School;

class SchoolController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $school = School::all();
        return view('admin.schools.schools', ['schools'=>$school]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         return view('admin.schools.school');
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
            'name' => ['required', 'string'],
            'describe' => ['required', 'string'],
            
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
         //dd($data);

        School::create($data);
         return redirect()->route('admin.school.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $school = School::find($id);
        return view('admin.schools.show_school',['school'=>$school]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
         $school = School::find($id);
        return view('admin.schools.edit_school',['school'=>$school]);
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
            'name' => ['required', 'string'],
            'describe' => ['required', 'string'],
            
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
         //dd($fileNameToStore);

        School::find($id)->update($data);
         return redirect()->route('admin.school.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
          School::find($id)->delete();

       return redirect()->route('admin.school.index');
    }
}
