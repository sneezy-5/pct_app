<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Service;
use App\Models\Emergency;

class ServiceController extends Controller
{
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $services = Service::all();
        return view('admin.services.services', ['services'=>$services]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         $emergencies = Emergency::all();
          return view('admin.services.service', ['emergencies'=>$emergencies]);
    }


    public function create_service($id)
    {
         $emergency = Emergency::find($id);
          return view('admin.services.service', ['emergencies'=>$emergency]);
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


        $data = $request->except('_token','service_id'); 
           
        $service = Service::create($data);

         Emergency::find($request['service_id'])->services()->attach([$service->id]);

         return redirect()->route('admin.emergency.show',['emergency'=>$request['service_id']]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $service = Service::find($id);
        return view('admin.services.show_service',['service'=>$service]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $service = Service::find($id);
        return view('admin.services.edit_service',['service'=>$service]);
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
           
        Service::create($data);
         return redirect()->route('admin.service.index');
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
        $emergency = Service::find($id)->emergency;
        foreach($emergency as $key=>$value){
            array_push($data,$value['id']);
        }
         Service::find($id)->delete();

         return redirect()->route('admin.emergency.show',['emergency'=>$data[0]]);
    }
}
