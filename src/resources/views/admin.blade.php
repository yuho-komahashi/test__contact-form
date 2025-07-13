@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/admin.css') }}" />
@endsection

@section('title','管理画面')

@section('button')
<div class="button__logout">
    <button class="button_logout-link" type="button" onclick="location.href='/'" >logout</button>
</div>
@endsection

@section('content')

@endsection