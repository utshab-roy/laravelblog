<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Post;

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

    public function create(){

        return view('posts.create');
    }

    public function store(){
        /**
         * create a new post using the request data.
         * save it to the database.
         * and redirect to the homepage.
         */

        dd(request()->all());
        $post = new Post;
//        dd(request('body'));
        return view('posts.create');
    }


}
