@extends('layout')


@section('posts')
  @foreach ($posts as $post)
    <h2>
      <a href="/posts/{{$post->id}}">
        {{$post->title}}
      </a>
    </h2>
    
    <h3>
      {{$post->excerpt}}
    </h3>
    
    <h5>
      {!! $post->body !!}
    </h5>
  @endforeach
@endsection



