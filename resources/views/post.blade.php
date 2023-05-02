@extends('layout')

@section('posts')

  <h1>
    {{ $post->title }}
  </h1>
  <p>
    by <a href="/authors/{{ $post->author->username }}">
      {{ $post->author->name }}
    </a>
  </p>

  <a href="/categories/{{ $post->category->slug }}">
    {{ $post->category->name }}
  </a>

  <h3>
    {{ $post->excerpt }}
  </h3>

  <p>
    {!! $post->body !!}
  </p>

  <a href="/">Homepage</a>

@endsection