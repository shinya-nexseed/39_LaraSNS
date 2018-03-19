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
  <hr>
@endsection


















