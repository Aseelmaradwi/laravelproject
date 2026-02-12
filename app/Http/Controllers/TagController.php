<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\tag;
use App\models\Post;


class TagController extends Controller
{

function index(){
    $data = Tag::all();
    return view('tag.index',['tags'=>$data,'page_Title'=>'page tag']);
   } 


   function create(){
    
    // Tag::create([
    //   'title'=> 'tiktok',

    // ]);
      tag::factory(100)->create();
      return response()->json([
        "message" => "tag created successfully"
    ], 201);

return redirect('/tag');
  } 

  public function show($id)
{
    $tag = Tag::with('posts.comments')->findOrFail($id);

    return view('tag.show', ['tag' => $tag,'page_Title' => $tag->title]);
}


  

  function TestManyToMany(){

  // $post4=Post::find(4);
  // $post9=Post::find(9);

  // $post4->tags()->attach( [1,3]);  
  //   $post9->tags()->attach( [1]);  

  //   return response()->json([
  //       'post4'=>$post4->tags,
  //       'post9'=>$post9->tags
  //   ]);
  // }

  // =======================

  // $tag1= Tag::find(3);
  // return response()->json([
  //       'tag1'=>$tag1->title,
  //        'posts'=>$tag1->posts
  // ]);
  // }

   $post4=Post::find(4);
   $post4->tags()->attach( [3]);
   return response()->json  ([
      'post4'=>$post4->tags,
       'post'=>$post4->title
   ]);
}

 function delete($id){
    Tag::destroy($id);
    // return redirect('/blog');
    return response()->json([
        "message" => "tag with id $id is deleted successfully"
    ], 204);
    return ("tag with id $id is deleted");
  }
}

