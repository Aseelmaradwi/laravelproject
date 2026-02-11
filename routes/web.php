<?php

use App\Http\Controllers\IndexController;
use App\Http\Controllers\jobcontroller;
use App\Http\Controllers\PostController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\TagController;


use Illuminate\Support\Facades\Route;

Route::get('/', [IndexController::class, 'index']);
Route::get('/About', [IndexController::class, 'about']);
Route::get('/Contact', [IndexController::class, 'contact']);


Route::get('/blog', [PostController::class, 'index']);
Route::get('/blog/create', [PostController::class, 'create']);
Route::get('/blog/delete/{id}', [PostController::class, 'delete']);
Route::get('/blog/{id}', [PostController::class, 'show']);



Route::get('/comment', [CommentController::class, 'index']);
Route::get('/comment/create', action: [CommentController::class, 'create']);

Route::get('/tag', [TagController::class, 'index']);
Route::get('/tag/create',  [TagController::class, 'create']);
Route::get('/tag/test',  [TagController::class, 'TestManyToMany']);









