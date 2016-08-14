<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

//login

Route::auth();
//posts with editing
Route::resource('/admin','PostController');
Route::get('/admin','PostController@admin');
Route::resource('/posts','PostController');
Route::get('posts/{slug}', ['as' => 'posts.add', 'uses' => 'PostController@getSingle'])->where('slug', '[\w\d\-\_]+');

//comments
Route::post('comments/{post_id}', ['uses' => 'CommentController@store', 'as' => 'comments.store']);

//authers
Route::get('/auther/{id}','AuthersController@sigleauther');
