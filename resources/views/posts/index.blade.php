@extends('layouts.app')

@section('title', 'Blog Posts')

@section('content')
<div class="container">
    <h1>
        <a href="{{ route('posts.create') }}" class="header-menu">New Post</a>
        Blog Posts
    </h1>
    <ul>
        @forelse ($posts as $post)
            <li>
                <a href="{{ route('posts.show', $post) }}">{{ $post->title }}</a>
                <a href="{{ route('posts.edit', $post) }}" class="edit">[edit]</a>
            </li>
        @empty
            <li>No posts yet</li>
        @endforelse
    </ul>
</div>
@endsection
