<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="utf-8">
  <title></title>
  <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/bootstrap.css') }}">
  {{-- public以下のパスを記載するだけで読み込める --}}
</head>
<body style="margin-top: 60px;">
  @include('navbar')

  <div class="container">
    @if(Session::has('delete_feed'))
      {{-- isset($_SESSION['delete_feed']) --}}
      <div class="alert alert-success">{{ Session::get('delete_feed') }}</div>
      {{-- $_SESSION['delete_feed'] --}}
    @endif

    @if(Session::has('create_feed'))
      <div class="alert alert-success">{{ Session::get('create_feed') }}</div>
    @endif

    @if(Session::has('create_register'))
      <div class="alert alert-success">{{ Session::get('create_register') }}</div>
    @endif
  </div>

  {{-- リクエストに応じてコンテンツ部分のみ入れ替える --}}
  <div class="container">
    <div class="row">
      @yield('content')
    </div>
  </div>

  <script type="text/javascript" src="{{ asset('assets/js/jquery-3.1.1.js') }}"></script>
</body>
</html>












