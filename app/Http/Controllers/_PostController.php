<?php

namespace App\Http\Controllers;
use App\Models\Post;
use Illuminate\Http\Request;

class _PostController extends Controller
{
   function index(){
    $data = Post::cursorPaginate( 5);

    return view('post.index',['posts'=>$data,'page_Title'=>'page post']);
   } 

   function show($id){
    $post=Post::findOrFail($id);
    return view('post.show',['post'=>$post,"page_Title"=>$post->title]);
   }

   function create(){
    
    // Post::create([
      // 'title'=> 'my first post',
      // 'body'=>'',
      // 'published'=>true,
      //       'author'=>'Aseel'
      //  ]);

      Post::factory(100)->create();
return response()->json([
    "message" => "post created successfully"
], 201);
      

   
return redirect('/blog');
  } 


    function delete($id){
    Post::destroy($id);
    // return redirect('/blog');
    return response()->json([
        "message" => "post with id $id is deleted successfully"
    ], 204);
    return ("post with id $id is deleted");
  }
}
