

<?php

use App\Http\Controllers\IndexController;
use App\Http\Controllers\jobcontroller;
use App\Http\Controllers\PostController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\TagController;
use Illuminate\Support\Facades\Route;


 Route::post('/blog/create', [PostController::class, 'create']);

 Route::delete('/blog/delete/{id}', [PostController::class, 'delete']);

 Route::post('/comment/create', [CommentController::class, 'create']);
  Route::delete('/comment/delete/{id}', [CommentController::class, 'delete']);


Route::post('/tag/create',  [TagController::class, 'create']);

 Route::delete('/tag/delete/{id}', [TagController::class, 'delete']);

