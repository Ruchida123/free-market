@extends('layouts.app')

@section('css')
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="{{ asset('css/auth/register.css') }}">
@endsection

@section('content')
<div class="register-form">
  <div class="register-form__heading">
    <h3  class="register-form__title">会員登録</h3>
  </div>
  <div class="register-form__content">
    <form class="form" action="/register" method="post">
      @csrf
      <div class="form__group">
        <div class="form__group-content">
          <span>メールアドレス</span>
          <div class="form__input--text">
            <input type="email" name="email" value="{{ old('email') }}"/>
          </div>
        </div>
        <div class="form__error">
          @error('email')
          {{ $message }}
          @enderror
        </div>
      </div>
      <div class="form__group">
        <div class="form__group-content">
          <span>パスワード</span>
          <div class="form__input--text">
            <input type="password" name="password"/>
          </div>
        </div>
        <div class="form__error">
          @error('password')
          {{ $message }}
          @enderror
        </div>
      </div>
      <div class="form__button">
        <button class="form__button-submit" type="submit">登録する
        </button>
      </div>
    </form>
    <div class="login__link">
      <a class="login__button-submit" href="/login">ログインはこちら</a>
    </div>
  </div>
</div>
@endsection