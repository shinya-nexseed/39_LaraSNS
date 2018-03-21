@extends('layout')

@section('content')
  {{-- cmd + /でbladeのコメントアウト --}}
  <h1>Timeline</h1>
  <a href="/feeds/create" class="btn btn-primary">Post</a><br>
  @foreach($feeds as $feed)
    {{ $feed['feed'] }}<br>
    <a href="feeds/{{ $feed['id'] }}">{{ $feed['created_at'] }}</a>
    <br>
    <hr>
  @endforeach
@endsection

















