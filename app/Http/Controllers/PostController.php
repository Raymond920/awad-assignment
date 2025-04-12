<?php

namespace App\Http\Controllers;

use App\Models\Post;

class PostController extends Controller
{
    public function show($id)
    {
        $post = Post::find($id);  // Retrieve the post by its ID
        return view('testing', compact('post'));  // Pass the post to the 'home' view
    }
}
