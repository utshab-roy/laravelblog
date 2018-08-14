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

//homepage
//Route::get('/', function () {
//    return view('welcome');
//});
//showing all the post
Route::get('/', function (){
    return view('welcome');
});

Route::get('/posts', 'PostsController@index');


Route::get('/posts/create', 'PostsController@create');  //the program does not work if we

Route::post('/posts', 'PostsController@store');

//show the specific post
Route::get('/posts/{post}', 'PostsController@show');    //switch these two line of code. WHY ?


//showing all the task as list
Route::get('/tasks', 'TasksController@index');

//showing individual task in h1 tag
Route::get('/tasks/{task}', 'TasksController@show');




