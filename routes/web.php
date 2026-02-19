<?php

use App\Http\Controllers\IndexController;
use App\Http\Controllers\jobcontroller;
use App\Http\Controllers\PostController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\TagController;
use App\Http\Controllers\_TestController;
use App\Http\Controllers\_postController;
use App\Http\Controllers\_TagController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

Route::get('/', [IndexController::class, '__invoke']);
Route::get('/contact', [ContactController::class, '__invoke']);


Route::resource('tag', TagController::class);

Route::get('/signup',[AuthController::class,'showsignup'])->name('signup');
Route::post('/signup',[AuthController::class,'signup']);
Route::get( '/login',[AuthController::class,'showlogin'])->name('login');
Route::post('/login',[AuthController::class,'login']);
Route::post('/logout',[AuthController::class,'logout'])->name('logout');

Route::middleware('auth')->group(function(){



Route::middleware('role:admin')->group(function(){

        Route::get('/post/create',[PostController::class,'create']);
        Route::post('/post',[PostController::class,'store']);
        Route::delete('/post/{id}',[PostController::class,'destroy']);
    });

Route::middleware('role:viewer,editor,admin')->group(function(){
    Route::get('/post',[PostController::class,'index']);
    Route::get('/post/{id}',[PostController::class,'show']);
});
Route::middleware('role:editor,admin')->group(function(){
    Route::get('/post/{id}/edit',[PostController::class,'edit']);
    Route::patch('/post/{id}',[PostController::class,'update']);
    });


Route::resource('comment', CommentController::class);//comment

});

Route::middleware('onlyme')->group(function(){
Route::get('/about', AboutController::class);
});












