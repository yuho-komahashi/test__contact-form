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

    <form class="confirm-form">
        <div class="confirm-table__wrapper">
            <table class="confirm-table">
                <tr class="confirm-table__row">
                    <th class="confirm-table__header">お名前</th>
                    <td class="confirm-table__text">
                        <input type="text" name="name" value="山田　太郎">
                    </td>
                </tr>
                <tr class="confirm-table__row">
                    <th class="confirm-table__header">性別</th>
                    <td class="confirm-table__text">
                        <input type="text" name="gender" value="男性">
                    </td>
                </tr>
                <tr class="confirm-table__row">
                    <th class="confirm-table__header">メールアドレス</th>
                    <td class="confirm-table__text">
                        <input type="email" name="email" value="test@example.com">
                    </td>
                </tr>
                <tr class="confirm-table__row">
                    <th class="confirm-table__header">電話番号</th>
                    <td class="confirm-table__text">
                        <input type="tel" name="tel" value="08012345678">
                    </td>
                </tr>
                <tr class="confirm-table__row">
                    <th class="confirm-table__header">住所</th>
                    <td class="confirm-table__text">
                        <input type="text" name="address" value="東京都渋谷区千駄ヶ谷1-2-3">
                    </td>
                </tr>
                <tr class="confirm-table__row">
                    <th class="confirm-table__header">建物名</th>
                    <td class="confirm-table__text">
                        <input type="text" name="building" value="千駄ヶ谷マンション101">
                    </td>
                </tr>
                <tr class="confirm-table__row">
                    <th class="confirm-table__header">お問い合わせの種類</th>
                    <td class="confirm-table__text">
                        <input type="text" name="inquiry" value="商品の交換について">
                    </td>
                </tr>
                <tr class="confirm-table__row">
                    <th class="confirm-table__header">お問い合わせ内容</th>
                    <td class="confirm-table__textarea">
                        <textarea name="content" rows="3">届いた商品が注文した商品ではありませんでした。商品の取り替えをお願いします。</textarea>
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
