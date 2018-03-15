@extends('layout')

@section('content')
  {{-- cmd + /でbladeのコメントアウト --}}
  <h1>Timeline</h1>
  @foreach($feeds as $feed)
    {{ $feed['feed'] }}<br>
    <a href="feeds/{{ $feed['id'] }}">{{ $feed['created_at'] }}</a>
    <br>
    <hr>
  @endforeach
@endsection

















