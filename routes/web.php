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

Route::get('/', function (){
    return view('welcome');
});

//showing all the task as list
Route::get('/tasks', function () {

    $tasks = DB::table('tasks')->get();
//    return $tasks; // this will give the JSON formatted data to the route 
    return view('tasks.index', compact('tasks'));
});

//showing individual task in h1 tag
Route::get('/tasks/{task}', function ($id) {

    $tasks = DB::table('tasks')->find($id);

//    return $tasks;
    return view('tasks.show', compact('tasks'));
});

