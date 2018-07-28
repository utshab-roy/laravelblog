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


use App\Task; // importing the Task class which is located in the App directory

Route::get('/', function (){
    return view('welcome');
});

//showing all the task as list
Route::get('/tasks', function () {

//    $tasks = DB::table('tasks')->get();
//    $tasks = App\Task::all();
    $tasks = Task::all(); // after importing the class bus using use App\Task at the top

//    return $tasks; // this will give the JSON formatted data to the route
    return view('tasks.index', compact('tasks'));
});

//showing individual task in h1 tag
Route::get('/tasks/{task}', function ($id) {

//    $tasks = DB::table('tasks')->find($id);
    $tasks = Task::find($id);

//    return $tasks;
    return view('tasks.show', compact('tasks'));
});

