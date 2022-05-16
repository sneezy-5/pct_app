<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Sik;
use App\Models\Emergency;

class SikController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $siks = Sik::all();
        
        return view('admin.siks.siks', ['siks'=>$siks]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $emergencies = Emergency::all();
          return view('admin.siks.sik',['emergencies'=>$emergencies]);
    }


    public function create_sick($id)
    {
         $emergency = Emergency::find($id);
          return view('admin.siks.sik', ['emergencies'=>$emergency]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
          $data = $request->except('_token', 'emergency_id'); 
         $request->validate([
            '_token' => ['required'],
            'name' => ['required', 'string'],
            'describe' => ['required', 'string'],
            
        ]);
         
      //dd($data);
           
       $sik_id = Sik::create($data);
        Emergency::find($request['sick_id'])->siks()->attach([$sik_id->id]);
     
        //Emergency::where('id',$request['emergency_id'])->first()->siks()->attach([$sik_id->id]);
        return redirect()->route('admin.sik.show',['sik'=>$request['sick_id']]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $emergencies = Emergency::find($id);
        return view('admin.siks.show_sik',['emergencies'=>$emergencies]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $sik = Sik::find($id);
        $emergencies = Emergency::all();
        return view('admin.siks.edit_sik',['sik'=>$sik, 'emergencies'=>$emergencies]);
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
           
        Sik::find($id)->update($data);
         return redirect()->route('admin.sik.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data =[];
        $emergency = Sik::find($id)->emergency;
        foreach($emergency as $key=>$value){
            array_push($data,$value['id']);
        }
        Sik::find($id)->delete();
       // dd($data[0]);
        return redirect()->route('admin.sik.show',['sik'=>$data[0]]);
    }
}
