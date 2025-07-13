@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/confirm.css') }}" />
@endsection

@section('title','お問い合わせ内容')

@section('content')<!--mainタグの中を記述-->
<div class="confirm__content">
    <div class="confirm__heading">
        Confirm
    </div>

    <form class="confirm-form" action="/thanks" method="post">
        @csrf
        <div class="confirm-table__wrapper">
            <table class="confirm-table">
                <tr class="confirm-table__row">
                    <th class="confirm-table__header">お名前</th>
                    <td class="confirm-table__text">
                        <input type="text" value="{{ $contactData['last_name'] }}{{ $contactData['first_name'] }}" readonly>
                        <input type="hidden" name="last_name" value="{{ $contactData['last_name'] }}">
                        <input type="hidden" name="first_name" value="{{ $contactData['first_name'] }}">
                    </td>
                </tr>
                <tr class="confirm-table__row">
                    <th class="confirm-table__header">性別</th>
                    <td class="confirm-table__text">
                        <input type="text" name="gender" value="{{ $contactData['gender']}}" readonly>
                    </td>
                </tr>
                <tr class="confirm-table__row">
                    <th class="confirm-table__header">メールアドレス</th>
                    <td class="confirm-table__text">
                        <input type="email" name="email" value="{{ $contactData['email']}}" readonly>
                    </td>
                </tr>
                <tr class="confirm-table__row">
                    <th class="confirm-table__header">電話番号</th>
                    <td class="confirm-table__text">
                        <input type="tel" value="{{ $contactData['tel1'] }}{{ $contactData['tel2'] }}{{ $contactData['tel3'] }}" readonly>
                        <input type="hidden" name="tel1" value="{{ $contactData['tel1'] }}">
                        <input type="hidden" name="tel2" value="{{ $contactData['tel2'] }}">
                        <input type="hidden" name="tel3" value="{{ $contactData['tel3'] }}">
                    </td>
                </tr>
                <tr class="confirm-table__row">
                    <th class="confirm-table__header">住所</th>
                    <td class="confirm-table__text">
                        <input type="text" name="address" value="{{ $contactData['address']}}" readonly>
                    </td>
                </tr>
                <tr class="confirm-table__row">
                    <th class="confirm-table__header">建物名</th>
                    <td class="confirm-table__text">
                        <input type="text" name="building" value="{{ $contactData['building']}}" readonly>
                    </td>
                </tr>
                <tr class="confirm-table__row">
                    <th class="confirm-table__header">お問い合わせの種類</th>
                    <td class="confirm-table__text">
                        <input type="text" name="category_id" value="{{ $contactData['category_name']}}" readonly>
                        <input type="hidden" name="category_id" value="{{ $contactData['category_id'] }}">
                    </td>
                </tr>
                <tr class="confirm-table__row">
                    <th class="confirm-table__header">お問い合わせ内容</th>
                    <td class="confirm-table__textarea">
                        <textarea name="detail" rows="3" readonly>{{ $contactData['detail']}}</textarea>
                    </td>
                </tr>
            </table>
        </div>
        <div class="confirm-button__wrapper">
            <div class="confirm-button">
                <button class="confirm-button-submit" type="submit">送信</button>
            </div>
            <div class="confirm-correction">
                <a class="confirm-correction-link" href="/" >修正</a>
            </div>
        </div>
    </form>
</div>
@endsection
