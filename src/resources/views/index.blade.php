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
                @csrf
                <div class="contact-form__group">
                    <div class="contact-form__group--title">
                        <span class="contact-form__label--item">お名前</span>
                        <span class="contact-form__label--required">※</span>
                    </div>
                    <div class="contact-form__group--content">
                        <div class="contact-form__input--text-half">
                            <input type="text" name="last_name" placeholder="例: 山田" value="{{ old('last_name') }}">
                        </div>
                        <div class="contact-form__input--text-half">
                            <input type="text" name="first_name" placeholder="例: 太郎" value="{{ old('first_name') }}">
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
                                <label><input type="radio" name="gender" value="1" checked="checked">男性</label>
                            </div>
                            <div class="form__radio--item">
                                <label><input type="radio" name="gender" value="2">女性</label>
                            </div>
                            <div class="form__radio--item">
                                <label><input type="radio" name="gender" value="3">その他</label>
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
                            <input type="email" name="email" placeholder="例: test@example.com" value="{{ old('email') }}">
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
                            <input type="tel" name="tel1" placeholder="080" value="{{ old('tel1') }}">&nbsp;&nbsp;&#45;&nbsp;&nbsp;
                        </div>
                        <div class="contact-form__input--text-three-part">
                            <input type="tel" name="tel2" placeholder="1234" value="{{ old('tel2') }}">&nbsp;&nbsp;&#45;&nbsp;&nbsp;
                        </div>
                        <div class="contact-form__input--text-three-part">
                            <input type="tel" name="tel3" placeholder="5678" value="{{ old('tel3') }}">
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
                            <input type="text" name="address" placeholder="例: 東京都渋谷区千駄ヶ谷1-2-3" value="{{ old('address') }}">
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
                            <input type="text" name="building" placeholder="例: 千駄ヶ谷マンション101" value="{{ old('building') }}">
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
                            <select class="contact-form__select" name="category_id">
                                <option value="">選択してください</option>
                                @foreach($categoryAll as $category)
                                <option value="{{ $category->id }}">{{ $category->content }}</option>
                                @endforeach
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
                            <textarea name="detail" rows="3" placeholder="お問い合わせ内容をご記載ください"></textarea>
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
