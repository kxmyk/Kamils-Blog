@extends('layout')

@section('posts')
  
  <h1>
    {{$post->title}}
  </h1>
  
  <h3>
    {{$post->excerpt}}
  </h3>
  
  <p>
    {!!$post->body!!}
  </p>

@endsection