@extends('layout')

@section('content')
<h2>venue (single) page</h2>
<article>
  <h1>name: {{ $venue->name }}</h1>
  <p>location: {{$venue->location}}</p>
  <p>capacity: {{$venue->capacity}}</p>
  <p>available: {{ $venue->available }}</p>
  <p>posted by: <a href="/authors/{{$venue->author->username}}">{{ $venue->author->username }}</a></p>
</article>
@endsection