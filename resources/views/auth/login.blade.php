@extends('layout')

@section('content')
  <div class="col-xs-6 col-xs-offset-3">
    <div class="panel panel-default">
      <div class="panel-heading">
        Login
      </div>
      <div class="panel-body">
        <form method="POST" action="/auth/login" class="form-horizontal">
          {{ csrf_field() }}

          <div class="form-group">
            <label class="col-xs-4 control-label">Email</label>
            <div class="col-xs-6">
              <input type="text" class="form-control" name="email">
            </div>
          </div>

          <div class="form-group">
            <label class="col-xs-4 control-label">Password</label>
            <div class="col-xs-6">
              <input type="text" class="form-control" name="password">
            </div>
          </div>

          <div class="form-group">
            <div class="col-xs-6 col-xs-offset-4">
              <input type="submit" class="btn btn-primary" value="Login">
            </div>
          </div>

        </form>
      </div>
    </div>
  </div>
@endsection




















