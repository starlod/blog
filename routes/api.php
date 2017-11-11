<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

// 'prefix' => 'masters', 'namespace' => 'Masters', 
Route::group(['as' => 'api.'], function() {
    Route::resource('posts', 'Api\PostsController', ['expect' => ['create', 'edit']]);
    Route::resource('posts/{post}/comments', 'Api\CommentsController', ['expect' => ['create', 'edit']]);
});
