<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostsController extends Controller
{

    public function index(){

//        return 'hello';
        return view('posts.index');
    }

    public function show(){

//        return 'hello';
        return view('posts.show');
    }


}
