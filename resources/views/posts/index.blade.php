@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Blog Posts</h1>
    <ul>
        @forelse ($posts as $post)
            <li>{{ $post->title }}</li>
        @empty
            <li>No posts yet</li>
        @endforelse
    </ul>
</div>
@endsection
