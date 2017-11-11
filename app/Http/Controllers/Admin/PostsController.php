<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\PostRequest;
use App\Post;

class PostsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        // $this->middleware('gate');
    }

    public function index()
    {
        $posts = Post::latest()->get();
        return view('admin.posts.index', ['posts' => $posts]);
    }

    public function show(Post $post)
    {
        return view('admin.posts.show', ['post' => $post]);
    }

    public function create()
    {
        return view('admin.posts.create');
    }

    public function store(PostRequest $request)
    {
        Post::create($request->all());

        return redirect()->route('index');
    }

    public function edit(Post $post)
    {
        return view('admin.posts.edit', ['post' => $post]);
    }

    public function update(PostRequest $request, Post $post)
    {
        $post->update($request->all());

        return redirect()->route('index');
    }

    public function destroy(Post $post)
    {
        $post->delete();

        return redirect()->route('index');
    }
}
