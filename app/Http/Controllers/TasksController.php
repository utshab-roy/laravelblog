<?php

namespace App\Http\Controllers;

//use Illuminate\Http\Request;

use App\Task;// importing the Task class which is located in the App directory

class TasksController extends Controller
{
    public function index(){
//    $tasks = DB::table('tasks')->get();
//    $tasks = App\Task::all();
        $tasks = Task::all(); // after importing the class bus using use App\Task at the top

//    return $tasks; // this will give the JSON formatted data to the route
        return view('tasks.index', compact('tasks'));
    }

    public function show(Task $task){ // Task::find(wildcard);

//    return $task;//returns the JSON value
        return view('tasks.show', compact('task'));
    }

//    public function show($id){
////    $tasks = DB::table('tasks')->find($id);
//        $tasks = Task::find($id);
//
////    return $tasks;//returns the JSON value
//        return view('tasks.show', compact('tasks'));
//    }
}
