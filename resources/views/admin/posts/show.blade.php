@extends('layouts.app')

@section('title', $post->title)

@section('content')
<div class="container">
    <h1>
        <a href="{{ route('index') }}" class="header-menu">Back</a>
        {{ $post->title }}
    </h1>
    <p>{!! nl2br(e($post->body)) !!}</p>

    <h2>Comments</h2>

    <ul>
        @forelse($post->comments()->get() as $comment)
            <li>
                {{ $comment->body }}
                <a href="#" class="del" data-id="{{ $comment->id }}">[x]</a>
                <form method="post" action="{{ route('comments.destroy', [$post, $comment]) }}" id="form_{{ $comment->id }}">
                    {{ csrf_field() }}
                    {{ method_field('delete') }}
                </form>
            </li>
        @empty
            <li>No comments yet</li>
        @endforelse
    </ul>

    <form method="post" action="{{ route('comments.store', $post) }}">
        {{ csrf_field() }}
        <p>
            <input type="text" name="body" placeholder="enter comment" value="{{ old('comment') }}">
            @if ($errors->has('body'))
                <span class="error">{{ $errors->first('body') }}</span>
            @endif
        </p>
        <p>
            <input type="submit" value="Add Comment">
        </p>
    </form>
</div>
@endsection
