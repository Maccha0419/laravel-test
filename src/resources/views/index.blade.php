<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Contact Form</title>
    <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/index.css') }}" />

</head>

<body>
    <main>
        <div class="contact-form__content">
            <div class="contact-form__heading">
                <h2>お問い合わせ</h2>
            </div>

            <form class="form" action="/contacts/confirm" method="post"><!-- POST メソッドで/contacts/confirmにアクセス -->
                @csrf
                <div class="form__group-inner">
                    <div class="form__group-title">
                        <span class="form__label--item">お名前</span>
                        <span class="form__label--required">※</span>
                    </div>
                    <div class="form__group-content">
                        <div class="form__input--text__name">
                            <input type="text" name="last_name" value="{{ old('last_name') }}"/>
                            <input class="form__group-content__left" type="text" name="first_name" value="{{ old('first_name') }}"/>
                        </div>
                        <div class="form__group-example">
                            <span class="form__group-example__name">例）山田</span>
                            <span class="form__group-example__name-right">例）太郎</span>
                        </div>
                        <div class="form__error">
                        <!--バリデーション機能を実装したら記述します。-->
                            @error('last_name',)
                                {{ $message }}
                            @enderror
                            @error('first_name')
                                {{ $message }}
                            @enderror
                        </div>
                    </div>
                </div>

                <div class="form__group-name">
                    <div class="form__group-title__gender">
                        <span class="form__label--item">性別</span>
                        <span class="form__label--required">※</span>
                    </div>
                    <div class="form__group-content__gender">
                        <div class="form__input--radio">
                            <input class="form__input--radio__gender" type="radio" name="gender" value="男性" value="{{ old('gender') }}" checked>
                            <label class="form__input--radio__label">男性</label>
                            <input class="form__input--radio__gender" type="radio" name="gender" value="女性" value="{{ old('gender') }}"> <label class="form__input--radio__label">女性</label>
                        </div>
                    </div>
                </div>

                <div class="form__group">
                    <div class="form__group-title">
                        <span class="form__label--item">メールアドレス</span>
                        <span class="form__label--required">※</span>
                    </div>
                    <div class="form__group-content">
                        <div class="form__input--text">
                            <input type="email" name="email" value="{{ old('email') }}"/>
                        </div>
                        <div class="form__group-example">
                            <span class="form__group-example__name">例）test@example.com</span>
                        </div>
                        <div class="form__error">
                        <!--バリデーション機能を実装したら記述します。-->
                            @error('email')
                                {{ $message }}
                            @enderror
                        </div>
                    </div>
                </div>

                <div class="form__group">
                    <div class="form__group-title">
                        <span class="form__label--item">郵便番号</span>
                        <span class="form__label--required">※</span>
                    </div>
                    <div class="form__group-content">
                        <div class="form__input--text__postcode">
                            <span class="form__input--text__post">〒</span>
                            <input type="text" name="postcode" value="{{ old('postcode') }}"/>
                        </div>
                        <div class="form__group-example">
                            <span class="form__group-example__postcode">例）123-4567</span>
                        </div>
                        <div class="form__error">
                        @error('postcode')
                            {{ $message }}
                        @enderror
                        </div>
                    </div>
                </div>

                <div class="form__group">
                    <div class="form__group-title">
                        <span class="form__label--item">住所</span>
                        <span class="form__label--required">※</span>
                    </div>
                    <div class="form__group-content">
                        <div class="form__input--text">
                            <input type="text" name="address" value="{{ old('address') }}"/>
                        </div>
                        <div class="form__group-example">
                            <span class="form__group-example__name">例）東京都渋谷区千駄ヶ谷1-2-3</span>
                        </div>
                        <div class="form__error">
                        @error('address')
                            {{ $message }}
                        @enderror
                        </div>
                    </div>
                </div>

                <div class="form__group">
                    <div class="form__group-title">
                        <span class="form__label--item">建物名</span>
                    </div>
                    <div class="form__group-content">
                        <div class="form__input--text">
                            <input type="text" name="building_name" value="{{ old('building_name') }}"/>
                        </div>
                        <div class="form__group-example">
                            <span class="form__group-example__name">例）千駄ヶ谷マンション101</span>
                        </div>
                        <div class="form__error">
                        @error('building_name')
                            {{ $message }}
                        @enderror
                        </div>
                    </div>
                </div>

                <div class="form__group">
                    <div class="form__group-title__textarea">
                        <span class="form__label--item">ご意見</span>
                        <span class="form__label--required">※</span>
                    </div>
                    <div class="form__group-content">
                        <div class="form__input--textarea">
                            <textarea name="opinion" value="{{ old('opinion') }}"></textarea>
                        </div>
                        <div class="form__error">
                        @error('opinion')
                            {{ $message }}
                        @enderror
                        </div>
                    </div>
                </div>

                <div class="form__button">
                    <button class="form__button-submit" type="submit">確認</button>
                </div>
            </form>
        </div>
    </main>
</body>