<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Comment;

class CommentsController extends Controller
{
    public function index(Post $post)
    {
        $comments = $post->comments()->oldest()->get();
        return response()->json($comments);
    }

    public function store(Request $request, Post $post)
    {
        $post->comments()->create($request->all());

        return response()->json($post);
    }

    public function destroy(Post $post, Comment $comment)
    {
        $comment->delete();

        return redirect()->back();
    }
}
