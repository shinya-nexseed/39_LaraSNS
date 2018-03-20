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

  {{-- リクエストに応じてコンテンツ部分のみ入れ替える --}}
  <div class="container">
    <div class="row">
      @yield('content')
    </div>
  </div>

  <script type="text/javascript" src="{{ asset('assets/js/jquery-3.1.1.js') }}"></script>
</body>
</html>












