@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/index.css') }}" />
@endsection

@section('title','お問い合わせ')

@section('content')<!--mainタグの中を記述-->
        <div class="contact-form__content">
            <div class="contact-form__heading">
                Contact
            </div>

            <form class="contact-form" action="/confirm" method="post">
                <div class="contact-form__group">
                    <div class="contact-form__group--title">
                        <span class="contact-form__label--item">お名前</span>
                        <span class="contact-form__label--required">※</span>
                    </div>
                    <div class="contact-form__group--content">
                        <div class="contact-form__input--text-half">
                            <input type="text" name="name" placeholder="例: 山田">
                        </div>
                        <div class="contact-form__input--text-half">
                            <input type="text" name="name" placeholder="例: 太郎">
                        </div>
                        <div class="contact-form__error">
                            <!--バリデーション用-->
                        </div>
                    </div>
                </div>
                <div class="contact-form__group">
                    <div class="contact-form__group--title">
                        <span class="contact-form__label--item">性別</span>
                        <span class="contact-form__label--required">※</span>
                    </div>
                    <div class="contact-form__group--content">
                        <div class="contact-form__input--radio">
                            <div class="form__radio--item">
                                <label><input type="radio" name="gender" value="男性" checked="checked">男性</label>
                            </div>
                            <div class="form__radio--item">
                                <label><input type="radio" name="gender" value="女性">女性</label>
                            </div>
                            <div class="form__radio--item">
                                <label><input type="radio" name="gender" value="その他">その他</label>
                            </div>
                        </div>
                        <div class="contact-form__error">
                            <!--バリデーション用-->
                        </div>
                    </div>
                </div>
                <div class="contact-form__group">
                    <div class="contact-form__group--title">
                        <span class="contact-form__label--item">メールアドレス</span>
                        <span class="contact-form__label--required">※</span>
                    </div>
                    <div class="contact-form__group--content">
                        <div class="contact-form__input--text">
                            <input type="email" name="email" placeholder="例: test@example.com">
                        </div>
                        <div class="contact-form__error">
                            <!--バリデーション用-->
                        </div>
                    </div>
                </div>
                <div class="contact-form__group">
                    <div class="contact-form__group--title">
                        <span class="contact-form__label--item">電話番号</span>
                        <span class="contact-form__label--required">※</span>
                    </div>
                    <div class="contact-form__group--content">
                        <div class="contact-form__input--text-three-part">
                            <input type="tel" name="tel1" placeholder="080">&nbsp;&nbsp;&#45;&nbsp;&nbsp;
                        </div>
                        <div class="contact-form__input--text-three-part">
                            <input type="tel" name="tel2" placeholder="1234">&nbsp;&nbsp;&#45;&nbsp;&nbsp;
                        </div>
                        <div class="contact-form__input--text-three-part">
                            <input type="tel" name="tel3" placeholder="1234">
                        </div>
                        <div class="contact-form__error">
                            <!--バリデーション用-->
                        </div>
                    </div>
                </div>
                <div class="contact-form__group">
                    <div class="contact-form__group--title">
                        <span class="contact-form__label--item">住所</span>
                        <span class="contact-form__label--required">※</span>
                    </div>
                    <div class="contact-form__group--content">
                        <div class="contact-form__input--text">
                            <input type="text" name="address" placeholder="例: 東京都渋谷区千駄ヶ谷1-2-3">
                        </div>
                        <div class="contact-form__error">
                            <!--バリデーション用-->
                        </div>
                    </div>
                </div>
                <div class="contact-form__group">
                    <div class="contact-form__group--title">
                        <span class="contact-form__label--item">建物名</span>
                    </div>
                    <div class="contact-form__group--content">
                        <div class="contact-form__input--text">
                            <input type="text" name="building" placeholder="例: 千駄ヶ谷マンション101">
                        </div>
                    </div>
                </div>
                <div class="contact-form__group">
                    <div class="contact-form__group--title">
                        <span class="contact-form__label--item">お問い合わせの種類</span>
                        <span class="contact-form__label--required">※</span>
                    </div>
                    <div class="contact-form__group--content">
                        <div class="contact-form__input--select">
                            <select class="contact-form__select" name="inquiry">
                                <option value="">選択してください</option>
                            </select>
                            <div class="contact-form__error">
                                <!--バリデーション用-->
                            </div>
                        </div>
                    </div>
                </div>
                <div class="contact-form__group">
                    <div class="contact-form__group--title">
                        <span class="contact-form__label--item">お問い合わせの内容</span>
                        <span class="contact-form__label--required">※</span>
                    </div>
                    <div class="contact-form__group--content">
                        <div class="contact-form__input--textarea">
                            <textarea name="content" rows="3" placeholder="お問い合わせ内容をご記載ください"></textarea>
                        </div>
                        <div class="contact-form__error">
                            <!--バリデーション用-->
                        </div>
                    </div>
                </div>
                <div class="contact-form__button">
                    <button class="contact-form__button-submit" type="submit">確認画面</button>
                </div>
            </form>
        </div>
@endsection
