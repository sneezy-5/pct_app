<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Actulity;
use Illuminate\Http\Request;
use App\Models\Comment;

class CommentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $comments = Comment::all();
        return view('admin.comment.comments',['comments'=>$comments]);
    }


    public function store(Request $request)
    {

           $request->validate([
            '_token' => ['required'],
            'comment' => ['required', 'string'],
            
        ]);

           $data = $request->except('_token'); 
            

        
        $data['user_id']= auth()->user()->id;
        $data['user_name']= auth()->user()->name;

        Actulity::create($data);

        
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
          $comment = Comment::find($id);
        return view('admin.comment.show_comment',['comment'=>$comment]);
    }




    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Comment::find($id)->delete();

       return redirect()->route('admin.comment.index');
    }


    //compteur de vote
    public function comment(Request $request)
    {
      
      $data = $request->except('_token');
       
        $comment =Comment::create($data);
        return response()->json(['response'=>$data]);
    }
}
