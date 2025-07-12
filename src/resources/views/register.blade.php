@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/register.css') }}" />
@endsection

@section('title','ユーザー登録')

@section('button')
<div class="button__register">
    <button class="button_register-link" type="button" onclick="location.href='/login'" >login</button>
</div>
@endsection

@section('content')
<div class="register-form__content">
    <div class="register-form__content--inner">
        <div class="register-form__heading">
            Register
        </div>
        
        <form class="register-form">
            <div class="register-form__group">
                <div class="register-form__label">お名前</div>
                <input type="text" name="name" placeholder="例: 山田　太郎">
            </div>
            <div class="register-form__group">
                <div class="register-form__label">メールアドレス</div>
                <input type="email" name="email" placeholder="例: test@example.com">
            </div>
            <div class="register-form__group">
                <div class="register-form__label">パスワード</div>
                <input type="password" name="email" placeholder="例: coachtech1106">
            </div>
            <div class="register-form__button">
                <button class="register-form__button-submit" type="submit">登録</button>
            </div>
        </form>
    </div>
</div>
@endsection