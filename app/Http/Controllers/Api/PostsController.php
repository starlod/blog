<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Models\Post;

class PostsController extends Controller
{
    public function index()
    {
        $posts = Post::latest()->paginate(20);
        return response()->json($posts);
    }

    public function show(Post $post)
    {
        return response()->json($post);
    }

    public function store(PostRequest $request)
    {
        Post::create($request->all());

        return response()->json();
    }

    public function update(PostRequest $request, Post $post)
    {
        $post->update($request->all());

        return response()->json();
    }

    public function destroy(Post $post)
    {
        $post->delete();

        return response()->json();
    }
}
