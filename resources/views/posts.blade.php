@extends('layout')


@section('posts')
  @foreach ($posts as $post)
    <h2>
      <a href="/posts/{{ $post->slug }}">
        {{ $post->title }}
      </a>
      <br>
    </h2>

    <h4>
      by <a href="/authors/{{ $post->author->username }}">
        {{ $post->author->name }}
      </a>
      in <a href="/categories/{{ $post->category->slug }}">
        {{ $post->category->name }}
      </a>
    </h4>

    <h5>
      {{ $post->excerpt }}
    </h5>

  @endforeach
@endsection



