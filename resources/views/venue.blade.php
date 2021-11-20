@extends('layout')

@section('content')
<h2>venue (single) page</h2>
<article>
  <h1>{{ $venue->name }}</h1>
  <p>{{$venue->location}}</p>
  <p>{{$venue->capacity}}</p>
  <div>{!! $venue->available !!}</div>
</article>
@endsection