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


Route::resource('tag', TagController::class);//comment

Route::get('/signup',[AuthController::class,'showsignup'])->name('signup');
Route::post('/signup',[AuthController::class,'signup']);
Route::get( '/login',[AuthController::class,'showlogin'])->name('login');
Route::post('/login',[AuthController::class,'login']);
Route::post('/logout',[AuthController::class,'logout'])->name('logout');

Route::middleware('auth')->group(function(){
    Route::resource('post', PostController::class);//comment
    Route::resource('comment', CommentController::class);//comment

});

Route::middleware('onlyme')->group(function(){
Route::get('/about', AboutController::class);
});












