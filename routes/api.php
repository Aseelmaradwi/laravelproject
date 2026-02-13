
<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\api\PostApiController;
use App\Http\Controllers\api\CommentApiController;
use App\Http\Controllers\api\TagApiController;


Route::apiResource('post', PostApiController::class);
Route::apiResource('comment', CommentApiController::class);
Route::apiResource('tag', TagApiController::class);

