@extends('layout')

@section('content')
  <h1>Detail</h1>
  {{ $feed['feed'] }}<br>
  <a href="/feeds/{{ $feed['id'] }}/edit" class="btn btn-warning btn-xs">Edit</a>
  <form method="POST" action="/feeds/{{ $feed['id'] }}" style="display: inline;">
    {{ csrf_field() }}
    <input type="hidden" name="_method" value="DELETE">
    <input type="submit" value="Delete" class="btn btn-danger btn-xs">
  </form>
  <a href="/feeds">Timeline</a>
  <br>
  <form method="POST" action="/feeds/like">
    {{ csrf_field() }}
    
    <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
    <input type="hidden" name="feed_id" value="{{ $feed['id'] }}">

    @if($is_like == 0)
      <input type="hidden" name="action" value="like">
      <input type="submit" class="btn btn-default btn-xs" value="いいね">
    @else
      <input type="hidden" name="action" value="unlike">
      <input type="submit" class="btn btn-info btn-xs" value="いいねを取り消す">
    @endif
  </form>
  <hr>
@endsection


















