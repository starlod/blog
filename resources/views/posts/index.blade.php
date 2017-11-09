@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Blog Posts</h1>
    <ul>
        @forelse ($posts as $post)
            <li><a href="{{ route('posts.show', $post) }}">{{ $post->title }}</a></li>
        @empty
            <li>No posts yet</li>
        @endforelse
    </ul>
</div>
@endsection
