@extends('layout')

@section('content')
  <div class="col-xs-6 col-xs-offset-3">
    <div class="panel panel-default">
      <div class="panel-heading">
        Register
      </div>
      <div class="panel-body">
        {{-- バリデーションエラー --}}
        @if (count($errors) > 0)
          <div class="alert alert-danger">
            <ul>
              @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
              @endforeach
            </ul>
          </div>
        @endif

        <form method="POST" action="/auth/register" class="form-horizontal">
          {{ csrf_field() }}
          
          <div class="form-group">
            <label class="col-xs-4 control-label">Name</label>
            <div class="col-xs-6">
              <input type="text" class="form-control" name="name" value="{{ old('name') }}">
            </div>
          </div>

          <div class="form-group">
            <label class="col-xs-4 control-label">Email</label>
            <div class="col-xs-6">
              <input type="text" class="form-control" name="email" value="{{ old('email') }}">
            </div>
          </div>

          <div class="form-group">
            <label class="col-xs-4 control-label">Password</label>
            <div class="col-xs-6">
              <input type="text" class="form-control" name="password">
            </div>
          </div>

          <div class="form-group">
            <label class="col-xs-4 control-label">Confirm Password</label>
            <div class="col-xs-6">
              <input type="text" class="form-control" name="password_confirmation">
            </div>
          </div>

          <div class="form-group">
            <div class="col-xs-6 col-xs-offset-4">
              <input type="submit" class="btn btn-primary" value="Register">
            </div>
          </div>

        </form>
      </div>
    </div>
  </div>
@endsection




















