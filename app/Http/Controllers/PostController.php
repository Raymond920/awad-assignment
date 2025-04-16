<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function show($id)
    {
        $post = Post::find($id);  // Retrieve the post by its ID
        return view('showPost', compact('post')); 
    }

    public function index(){
        // fetch all posts from database
        $posts = Post::all();

        // Redirect to the posts index page with a success message
        return redirect()->route('posts.index')->with('success', 'Post created successfully!');
    }
}
