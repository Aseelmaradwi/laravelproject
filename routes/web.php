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








use Illuminate\Support\Facades\Route;

Route::get('/', [IndexController::class, '__invoke']);
Route::get('/about', [AboutController::class, '__invoke']);
Route::get('/contact', [ContactController::class, '__invoke']);


// Route::get('/blog', [PostController::class, 'index']);
// Route::get('/blog/{id}', [PostController::class, 'show']);



// Route::get('/comment', [CommentController::class, 'index']);
// Route::get('/comment/{id}', [CommentController::class, 'show']);

// Route::post('/comment/create', [CommentController::class, 'create']);

// Route::get('/tag', [TagController::class, 'index']);
// Route::post('/tag/create',  [TagController::class, 'create']);
// Route::get('/tag/test',  [TagController::class, 'TestManyToMany']);
// Route::get('/tag/{id}', [TagController::class, 'show']);

Route::resource('comment', CommentController::class);//comment
Route::resource('post', PostController::class);//comment
Route::resource('tag', TagController::class);//comment












