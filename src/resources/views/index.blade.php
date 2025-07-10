<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>お問い合わせ</title>
    <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/index.css') }}" />
</head>
<body>
    <header class="header">
        <div class="header__inner">
            <div class="header-title">
                <div class="header__logo">
                    FashionablyLate
                </div>
            </div>
        </div>
    </header>

    <main>
        <div class="contact-form__content">
            <div class="contact-form__heading">
                <h2>Contact</h2>
            </div>

            <form class="contact-form__body">
                <div class="form__group">
                    <div class="form__group--title">
                        <span class="form__label--item">お名前</span>
                        <span class="form__label--required">※</span>
                    </div>
                    <div class="form__group--content">
                        <div class="form__input--text-half">
                            <input type="text" name="name" placeholder="例: 山田">
                        </div>
                        <div class="form__input--text-half">
                            <input type="text" name="name" placeholder="例: 太郎">
                        </div>
                        <div class="form__error">
                            <!--バリデーション用-->
                        </div>
                    </div>
                </div>
                <div class="form__group">
                    <div class="form__group--title">
                        <span class="form__label--item">性別</span>
                        <span class="form__label--required">※</span>
                    </div>
                    <div class="form__group--content">
                        <div class="form__input--radio">
                            <input type="radio" name="gender" value="男性" checked="checked">男性
                            <input type="radio" name="gender" value="女性">女性
                        </div>
                        <div class="form__error">
                            <!--バリデーション用-->
                        </div>
                    </div>
                </div>
                <div class="form__group">
                    <div class="form__group--title">
                        <span class="form__label--item">メールアドレス</span>
                        <span class="form__label--required">※</span>
                    </div>
                    <div class="form__group--content">
                        <div class="form__input--text">
                            <input type="email" name="email" placeholder="例: test@example.com">
                        </div>
                        <div class="form__error">
                            <!--バリデーション用-->
                        </div>
                    </div>


                    </div>
                </div>
                <div class="form__group">
                    <div class="form__group--title">

                    </div>
                </div>
                <div class="form__group">

                </div>
                <div class="form__group">

                </div>
                <div class="form__group">

                </div>
            </form>
        </div>
    </main>
</body>
</html>