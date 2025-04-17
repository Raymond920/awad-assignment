<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function show($id)
    {
        $post = Post::find($id);  // Retrieve the post by its ID
        return view('posts.show', compact('post'));
    }

    public function index()
    {
        // fetch all posts from database
        $posts = Post::all();

        // Return the view with the posts data
        return view('home', compact('posts'));
    }

    public function store()
    {
        // Validate the request data
        $validatedData = request()->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
        ]);

        // Create a new post
        $post = Post::create($validatedData);

        // Redirect to the posts index page with a success message
        return redirect()->route('posts.index')->with('success', 'Post created successfully!');
    }

    public function update($id)
    {
        // Validate the request data
        $validatedData = request()->validate([
            'content' => 'required|string',
        ]);

        // Find the post by ID and update it
        $post = Post::findOrFail($id);
        $post->update($validatedData);

        // Redirect to the posts index page with a success message
        return redirect()->route('posts.index')->with('success', 'Post updated successfully!');
    }

    public function destroy($id)
    {
        // Find the post by ID and delete it
        $post = Post::findOrFail($id);
        $post->delete();

        // Redirect to the posts index page with a success message
        return redirect()->route('posts.index')->with('success', 'Post deleted successfully!');
    }
}
