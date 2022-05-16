<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Actulity;

class BornController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $borns = Actulity::where('type','naissance')->get();
        return view('admin.borns.borns',['borns'=>$borns]);
    }

  


      /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.borns.born');
    }
    

   public function store(Request $request)
    {
        $request->validate([
            '_token' => ['required'],
            'mother_name' => ['required', 'string'],
             'child_name' => ['required', 'string'],
             'born_date' => ['required', 'string'],
            
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


        $data['title']= "nouvelle naissance";
        $data['user_id']= auth()->user()->id;
        $data['user_name']= auth()->user()->name;
        $data['type']='naissance';
         //dd($fileNameToStore);

        Actulity::create($data);

       return redirect()->route('admin.born.index');
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $born = Actulity::find($id);
        return view('admin.borns.show_born',['born'=>$born]);
    }

   
     /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $born = Actulity::find($id);
        return view('admin.borns.edit_born',['born'=>$born]);
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
            'mother_name' => ['required', 'string'],
             'child_name' => ['required', 'string'],
             'born_date' => ['required', 'string'],
            
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
            }


       
        $data['user_id']= auth()->user()->id;
        $data['user_name']= auth()->user()->name;
         //dd($data);

        Actulity::find($id)->update($data);

       return redirect()->route('admin.born.index');
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

       return redirect()->route('admin.born.index');
    }
}
