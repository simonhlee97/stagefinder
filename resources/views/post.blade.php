@extends('layout')

@section('content')
<article>
  <h1>{{ $post->title }}</h1>
  <p>updated: {{$post->updated_at}}</p>
  <p>by: <a href="/authors/{{$post->author->username}}">{{ $post->author->username }}</a></p>
  <p>category: <a href="/categories/{{$post->category->slug}}">{{ $post->category->name }}</a></p>
  <div>{!! $post->body !!}</div>
</article>
@endsection