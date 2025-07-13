@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/login.css') }}" />
@endsection

@section('title','ログイン')

@section('button')
<div class="button__login">
    <button class="button_login-link" type="button" onclick="location.href='/register'" >register</button>
</div>
@endsection

@section('content')
<div class="login-form__content">
    <div class="login-form__content--inner">
        <div class="login-form__heading">
            Login
        </div>
        
        <form class="login-form">
            <div class="login-form__group">
                <div class="login-form__label">メールアドレス</div>
                <input type="email" name="email" placeholder="例: test@example.com">
            </div>
            <div class="login-form__group">
                <div class="login-form__label">パスワード</div>
                <input type="password" name="email" placeholder="例: coachtech1106">
            </div>
            <div class="login-form__button">
                <button class="login-form__button-submit" type="submit">ログイン</button>
            </div>
        </form>
    </div>
</div>
@endsection