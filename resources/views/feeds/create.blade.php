@extends('layout')

@section('content')
  <h1>Create</h1>

  <form method="POST" action="/feeds">
    {{-- 注意 --}}
    {{ csrf_field() }}
    <div class="form-group">
      <label>Feed</label>
      <textarea name="feed" class="form-control" cols="50" rows="10"></textarea>
    </div>
    <div class="form-group">
      <input type="submit" class="btn btn-primary form-control" value="Add feed">
    </div>
  </form>
@endsection


















