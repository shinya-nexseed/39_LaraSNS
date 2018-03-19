@extends('layout')

@section('content')
  <h1>Edit</h1>

  <form method="POST" action="/feeds/{{ $feed['id'] }}">
    {{-- 注意 --}}
    {{ csrf_field() }}
    <input type="hidden" name="_method" value="PATCH">
    <div class="form-group">
      <label>Feed</label>
      <textarea name="feed" class="form-control" cols="50" rows="10">{{ $feed['feed'] }}</textarea>
    </div>
    <div class="form-group">
      <input type="submit" class="btn btn-primary form-control" value="Update">
    </div>
  </form>
@endsection


















