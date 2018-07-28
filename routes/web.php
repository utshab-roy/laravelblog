<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


//showing all the post
Route::get('/posts', 'PostsController@index');

//show the specific post
Route::get('/posts/{post}', 'PostsController@show');

//showing all the task as list
Route::get('/tasks', 'TasksController@index');

//showing individual task in h1 tag
Route::get('/tasks/{task}', 'TasksController@show');




