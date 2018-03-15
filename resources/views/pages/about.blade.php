{{-- layout.blade.phpを呼び出す --}}
@extends('layout')

{{-- extendsで呼び出したレイアウトファイルの目印（yield）にこの中身を代入 --}}
@section('content')
  <h1>About me!:{{ $data['first_name'] }}</h1>
@endsection