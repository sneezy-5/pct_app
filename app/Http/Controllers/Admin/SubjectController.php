<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use App\Models\Subject;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Notifications\ValidateSubject;


class SubjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $subjects = Subject::orderBy('id', 'DESC')->where('is_valided',0)->get();
        return view('admin.subjects.subjects',['subjects'=>$subjects]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.subjects.subject');
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
            'describe'=>['required', 'string']
            
        ]);


        $data = $request->except('_token'); 


         
           
        $data['user_id']= auth()->user()->id;

        Subject::create($data);

       return redirect()->route('admin.subject.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $subjects = Subject::find($id);
        return view('admin.subjects.show_subject',['subject'=>$subjects]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
          $subejct = Subject::find($id);
        return view('admin.subjects.edit_subject',['subject'=>$subejct]);
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
            'describe'=>['required', 'string']
            
        ]);


        $data = $request->except('_token'); 


         
           
        $data['user_id']= auth()->user()->id;

        Subject::find($id)->update($data);
        return redirect()->route('admin.subject.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Subject::find($id)->delete();


       return redirect()->route('admin.subject.index');
    }

    public function approuved($id)
    {
       $subejct= Subject::find($id);
       $users = User::all();
       $subejct->is_valided = 1;
       $subejct->save();
       //Actulity::create(['title'=>''])
       foreach($users as $user){
        $user->notify(new ValidateSubject($subejct));
    }
        return redirect()->route('admin.subject.index');
    }
}
