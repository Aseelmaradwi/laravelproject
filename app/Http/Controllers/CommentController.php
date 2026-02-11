<?php

namespace App\Http\Controllers;
use App\Models\comment;
use Illuminate\Http\Request;


class CommentController extends Controller
{
   function index(){
    $data = comment::all();
    return view('comment.index',['comments'=>$data,'page_Title'=>'page comment']);
   } 

   function create(){
  
    // Comment::create([
    //   'author'=> 'aseel',
    //   'content'=>'this is my first comment content',
    //   'post_id'=>3,
    // ]);
          Comment::factory(100)->create();

return redirect('/comment');
  } 


}
