<?php

namespace App\Http\Controllers;

use App\Models\Post;

class PostController extends Controller
{
    public function show($id)
    {
        $post = Post::find($id);  // Retrieve the post by its ID
        return view('showPost', compact('post')); 
    }

    // this method is just for testing can delete later
    public function test($id)
    {
        $post = Post::find($id);  // Retrieve the post by its ID
        return view('testing', compact('post')); 
    }

    public function index(){
        // fetch all posts from database
        $posts = Post::all();

        // pass the posts data to home view
        return view('home', compact('posts'));
    }
}
