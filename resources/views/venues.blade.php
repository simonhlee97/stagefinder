@extends('layout')

@section('content')

  @foreach ($venues as $venue)
    <article class="{{$loop->even ? 'mb-6' : 'mb-3'}}">
      <h1>venue name: <a href="/venues/{{$venue->name}}">{{$venue->name}}</a></h1>
    </article>
  @endforeach

@endsection