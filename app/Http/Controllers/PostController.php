<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Http\Requests\PostRequest;


class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Post::latest()->cursorPaginate( 5);

    return view('post.index',['posts'=>$data,'page_Title'=>'page post']);
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('post.create',['page_Title'=>'create post']);
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(PostRequest $request)
    {
     $post=new Post();
     $post->title=$request->input('title');
     $post->body=$request->input('body');
     $post->author=$request->input('author');
     $post->published=$request->input('published');
     $post->save();

     return redirect('post')->with('success','Post created successfully');

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
         $post=Post::findOrFail($id);
    return view('post.show',['post'=>$post,"page_Title"=>$post->title]);
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $post=Post::findOrFail($id);
        return view('post.edit',["post"=>$post,"page_Title"=>$post->title]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(PostRequest $request, string $id)
    {
        $post=Post::findOrFail($id);

     $post->title=$request->input('title');
     $post->body=$request->input('body');
     $post->author=$request->input('author');
     $post->published=$request->has('published');
     
     $post->save();

     return redirect('post')->with('success','Post updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $post=Post::findOrFail($id);
        $post->delete();
        return redirect('post')->with('success','Post deleted successfully');
    }
}
