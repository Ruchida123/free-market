<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
  <title>Rese</title>
  <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}">
  <link rel="stylesheet" href="{{ asset('css/common.css') }}">
  @yield('css')
</head>

<body>
  <header class="header">
    <div class="header__inner">
      <div class="header-utilities">
        <span class="header__logo">
          <img src="{{asset('storage/logo.svg')}}">
        </span>
        @if (\Route::currentRouteName() === 'index')
          <input class="header-search" type="search" name="keyword" value="{{ old('keyword') }}" placeholder="  なにをお探しですか？"/>
          @if (Auth::check())
            <form name="logout-form" action="/logout" method="post">
              @csrf
              <a class="header-link" onclick="document.forms[0].submit();">ログアウト</a>
            </form>
            <a class="header-link" href="/mypage">マイページ</a>
          @else
            <a class="header-link" href="/login">ログイン</a>
            <a class="header-link" href="/register">会員登録</a>
          @endif
          <form class="form" action="/register" method="get">
            @csrf
            <button class="header-submit" type="submit">出品</button>
          </form>
        @endif
      </div>
    </div>
  </header>

  <main class="main">
    @yield('content')
  </main>

  <script src="{{ asset('js/menu.js') }}"></script>
</body>

</html>