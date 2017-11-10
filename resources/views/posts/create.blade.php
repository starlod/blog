@extends('layouts.app')

@section('title', 'New Post')

@section('content')
<div class="container">
    <h1>
        <a href="{{ route('index') }}" class="header-menu">Back</a>
        New Post
    </h1>
    <form method="post" action="{{ route('posts.store') }}">
        {{ csrf_field() }}
        <p>
            <input type="text" name="title" placeholder="enter title">
        </p>
        <p>
            <textarea name="body" placeholder="enter body"></textarea>
        </p>
        <p>
            <input type="submit" value="Add">
        </p>
    </form>
</div>
@endsection
