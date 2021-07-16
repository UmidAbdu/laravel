@extends('layout')

@section('content')

    <article>
        <h1>{{ $post->title }}</h1>

        <p>
            <a href="/categories/{{ $post->category->id }}">{{ $post->category->name }}</a>
        </p>

    </article>
    <div>
        {!! $post->body !!}
    </div>
    <a href="/">Go back</a>

@endsection
