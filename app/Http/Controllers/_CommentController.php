<?php

namespace App\Http\Controllers;
use App\Models\comment;
use Illuminate\Http\Request;


class _CommentController extends Controller
{
   function index(){
    $data = comment::all();
    return view('comment.index',['comments'=>$data,'page_Title'=>'page comment']);
   } 

   function show($id){
    $comment=Comment::findOrFail(id: $id);
    return view('comment.show',['comment'=>$comment,"page_Title"=>$comment->title]);
   }

   function create(){
  
    // Comment::create([
    //   'author'=> 'aseel',
    //   'content'=>'this is my first comment content',
    //   'post_id'=>3,
    // ]);
          Comment::factory(100)->create();
          return response()->json([
            "message" => "comment created successfully"
        ], 201);

return redirect('/comment');
  } 


   function delete($id){
    Comment::destroy($id);
    // return redirect('/blog');
    return response()->json([
        "message" => "comment with id $id is deleted successfully"
    ], 204);
    return ("comment with id $id is deleted");
  }


}
