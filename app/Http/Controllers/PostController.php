<?php

namespace App\Http\Controllers;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
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
      

   
return redirect('/blog');
  } 


    function delete($id){
    Post::destroy($id);
    return redirect('/blog');
    return ("post with id $id is deleted");
  }
}
