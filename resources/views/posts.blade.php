@extends('layout')

@section('content')

  @foreach ($posts as $post)
  {{-- @dd($loop) --}}
    <article class="{{$loop->even ? 'mb-6' : 'mb-3'}}">
      <h1><a href="/posts/{{$post->slug}}">{{$post->title}}</a></h1>
      <p>by: <a href="/authors/{{$post->author->username}}">{{ $post->author->username }}</a></p>

      <p>category: <a href="/categories/{{$post->category->slug}}">{{$post->category->name }}</a></p>
    </article>
  @endforeach

@endsection