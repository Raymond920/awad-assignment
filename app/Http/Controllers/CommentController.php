<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Post;
use Illuminate\Support\Facades\Gate;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CommentController extends Controller
{
    /**
     * Store a newly created comment in storage.
     */
    public function store(Request $request, Post $post)
    {
        $request->validate([
            'content' => 'required|string|max:1000',
        ]);

        Gate::authorize('create', Comment::class);
        Comment::create([
            'content' => $request['content'],
            'user_id' => Auth::id(),
            'post_id' => $post->id,
        ]);

        return redirect()->back()->with('success', 'Comment added successfully!');
    }

    /**
     * Update the specified comment in storage.
     */
    public function update(Request $request, Comment $comment)
    {
        $request->validate([
            'content' => 'required|string|max:1000',
        ]);

        $comment->content = $request->content;

        Gate::authorize('update', $comment);
        $comment->save();

        return redirect()->back()->with('success', 'Comment updated successfully!');
    }

    /**
     * Remove the specified comment from storage.
     */
    public function destroy(Comment $comment)
    {
        Gate::authorize('delete', $comment);
        $comment->delete();

        return redirect()->back()->with('success', 'Comment deleted successfully');
    }
}
