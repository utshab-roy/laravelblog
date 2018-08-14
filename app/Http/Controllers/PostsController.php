<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Post;

class PostsController extends Controller
{

    public function index(){

//        return 'hello';
//        $posts = Post::all();//asc order
        $posts = Post::latest()->get();//latest() is responsible for the desc order

        return view('posts.index', compact('posts'));
    }

    //general way
//    public function show($id){
//
////        return 'hello';
//        $post = Post::find($id);
//        return view('posts.show', compact('post'));
//    }

//Route model binding
public function show(Post $post){
    return view('posts.show', compact('post'));
}
//route model binding

    public function create(){

        return view('posts.create');
    }

    public function store(){
        /**
         * create a new post using the request data.
         * save it to the database.
         * and redirect to the homepage.
         */

//        dd(request()->all());
//        dd(request('title'));
//        dd(request(['title', 'body']));

        /*//this is the first method
        $post = new Post;
        //new post assigning new value to the field
        $post->title = request('title');
        $post->body = request('body');
        //save to database
        $post->save();
        //redirect to the home page
        return redirect('/');
        //end of first method*/

        //second method
//        Post::create([
//            'title' => request('title'),
//            'body'  => request('body')
//        ]);
        //second method end

        //third method

        $this->validate(request(), [
            'title' => 'required|min:5',
            'body'  => 'required'
        ]);

        Post::create(request(['title', 'body']));
        //end of third method
        return redirect('/posts');


//        dd(request('body'));
    }


}
