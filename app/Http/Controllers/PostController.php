<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use Illuminate\Support\Facades\Gate;

class PostController extends Controller
{
    public function index()
    {
        Gate::authorize('viewAny', Post::class);
        return view('home');
    }

    public function show($id)
    {
        $post = Post::find($id);
        Gate::authorize('view', $post);
        return view('posts.show', compact('post'));
    }

    public function create()
    {
        Gate::authorize('create', Post::class);
        return view('posts.create');
    }

    public function store()
    {
        $validated = request()->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
        ]);

        // Create a new post
        Gate::authorize('create', Post::class);
        Post::create($validated);

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

        Gate::authorize('update', $post);
        $post->update($validatedData);

        // Redirect to the posts index page with a success message
        return redirect()->back()->with('success', 'Post updated successfully!');
    }

    public function destroy($id)
    {
        // Find the post by ID and delete it
        $post = Post::findOrFail($id);

        Gate::authorize('delete', $post);
        $post->delete();

        // Redirect to the posts index page with a success message
        return redirect()->route('posts.index')->with('success', 'Post deleted successfully!');
    }
}
