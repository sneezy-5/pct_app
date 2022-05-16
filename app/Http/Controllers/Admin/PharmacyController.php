<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Pharmacy;

class PharmacyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pharmacies = Pharmacy::all();
        return view('admin.pharmacies.pharmacies', ['pharmacies'=>$pharmacies]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //$form->leaflet('latitude', 'longitude');
        return view('admin.pharmacies.pharmacy');
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
         //dd($fileNameToStore);

        Pharmacy::create($data);
         return redirect()->route('admin.pharmacy.index');
    
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
         $pharmacy = Pharmacy::find($id);
        return view('admin.pharmacies.show_pharmacy',['pharmacy'=>$pharmacy]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
            $pharmacy = Pharmacy::find($id);
        return view('admin.pharmacies.edit_pharmacy',['pharmacy'=>$pharmacy]);
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
            $data['image']= Pharmacy::find($id)->image;
            //dd($path);
            }

           
        $data['user_id']= auth()->user()->id;
         //dd($fileNameToStore);

        Pharmacy::find($id)->update($data);
         return redirect()->route('admin.pharmacy.index');
    
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Pharmacy::find($id)->delete();

       return redirect()->route('admin.pharmacy.index');
    }


    public function pharDegarde()
    {
       $pharmacies = Pharmacy::where('is_active',1)->get();

        return view('admin.pharmacies.pharmacie', ['pharmacies'=>$pharmacies]);
    }
}
