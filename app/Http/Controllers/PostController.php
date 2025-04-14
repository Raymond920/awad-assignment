<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function index()
    {
        // Fetch all posts from the database
        $posts = Post::all();

        // Return the view with the posts data
        return view('posts.index', compact('posts'));
    }

    public function show($id)
    {
        // Fetch a single post by its ID
        $post = Post::findOrFail($id);

        // Return the view with the post data
        return view('posts.show', compact('post'));
    }

    public function store(){
        // Validate the request data
        $validatedData = request()->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
            'category_id' => 'required|exists:categories,id',
        ]);

        // Create a new post
        $post = Post::create($validatedData);

        // Redirect to the posts index page with a success message
        return redirect()->route('posts.index')->with('success', 'Post created successfully!');
    }
}
