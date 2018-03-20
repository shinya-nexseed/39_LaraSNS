<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container">
    <div class="navbar-header">
      <a href="/" class="navbar-brand">LaraSNS</a>
    </div>
    <div class="collapse navbar-collapse">
      {{-- メニュー --}}
      <ul class="nav navbar-nav">
        <li><a href="/feeds">Feeds</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        @if (Auth::guest())
          {{-- ログインしていない時 --}}
          <li><a href="/auth/login">Login</a></li>
          <li><a href="/auth/register">Register</a></li>
        @else
          {{-- ログインしている時 --}}
          <li><a href="">{{ Auth::user()->name }}</a></li>
          <li><a href="/auth/logout">Logout</a></li>
        @endif
      </ul>
    </div>
  </div>
</nav>


















