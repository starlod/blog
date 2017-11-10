@extends('layouts.app')

@section('title', $post->title)

@section('content')
<div class="container">
    <h1>
        <a href="{{ route('index') }}" class="header-menu">Back</a>
        {{ $post->title }}
    </h1>
    <p>{!! nl2br(e($post->body)) !!}</p>
</div>
@endsection
