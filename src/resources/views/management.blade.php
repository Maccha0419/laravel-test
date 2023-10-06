<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Contact Form</title>
    <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/management.css') }}" />

</head>

<body>
    <main>
        <div class="management-form__content">
            <div class="management-form__heading">
                <h2>管理システム</h2>
            </div>

            <div class="management__content">
                <form class="form" action="/contacts" method="post"><!-- POST メソッドで/contacts/confirmにアクセス -->
                    @csrf
                    <div class="form__group">
                        <div class="form__group-title">
                            <span class="form__label--item">お名前</span>
                        </div>
                        <div class="form__group-content">
                            <input type="text" name="fullname" value="{{ old('fullname') }}"/>
                        </div>

                        <div class="form__group-title">
                            <span class="form__label--item">性別</span>
                        </div>
                        <div class="form__input--radio">
                            <input class="form__input--radio__gender" type="radio" name="gender" value="全て" value="{{ old('gender') }}" checked>
                            <label class="form__input--radio__label">全て</label>
                            <input class="form__input--radio__gender" type="radio" name="gender" value="男性" value="{{ old('gender') }}" >
                            <label class="form__input--radio__label">男性</label>
                            <input class="form__input--radio__gender" type="radio" name="gender" value="女性" value="{{ old('gender') }}">
                            <label class="form__input--radio__label">女性</label>
                        </div>
                    </div>

                    <div class="form__group">
                        <div class="form__group-title">
                            <span class="form__label--item">登録日</span>
                        </div>
                    <div class="form__group-content">
                        <input type="text" name="date_start" value="{{ old('date_start') }}"/>
                        <p>~</p>
                        <input type="text" name="date_finish" value="{{ old('date_finish') }}"/>
                    </div>

                    <div class="form__group">
                        <div class="form__group-title">
                            <span class="form__label--item">メールアドレス</span>
                        </div>
                    <div class="form__group-content">
                        <input type="text" name="address" value="{{ old('address') }}"/>
                    </div>

                    <div class="form__button">
                        <button class="form__button-submit" type="submit">検索</button>
                    </div>
                    <div class="form__button-back">
                        <button class="form__button-fix" type="submit" name="back" >リセット</button>
                    </div>

                    {{ $contact->links() }}

                </form>
            </div>


            <div class="contact-table">
                <table class="contact-table__inner">
                    <tr class="contact-table__row">
                        <th class="contact-table__header">
                            <span class="contact-table__header-span">ID</span>
                            <span class="contact-table__header-span">お名前</span>
                            <span class="contact-table__header-span">性別</span>
                            <span class="contact-table__header-span">メールアドレス</span>
                            <span class="contact-table__header-span">ご意見</span>
                        </th>
                    </tr>

                    <tr class="todo-table__row">
                        <td class="todo-table__item">
                            <form class="update-form" action="" method="post">
                                @csrf
                                @foreach ($contact as $contact)
                                <div class="update-form__item">
                                    <input class="update-form__item-input" type="text" name="content" value=""/>
                                    <input type="hidden" name="id" value="" />
                                </div>
                                <div class="update-form__item">
                                    <input class="update-form__item-input" type="text" name="content" value=""/>
                                    <input type="hidden" name="id" value="" />
                                </div>
                                <div class="update-form__item">
                                    <input class="update-form__item-input" type="text" name="content" value=""/>
                                    <input type="hidden" name="id" value="" />
                                </div>
                                <div class="update-form__item">
                                    <input class="update-form__item-input" type="text" name="content" value=""/>
                                    <input type="hidden" name="id" value="" />
                                </div>
                                <div class="update-form__item">
                                    <input class="update-form__item-input" type="text" name="content" value=""/>
                                    <input type="hidden" name="id" value="" />
                                </div>
                                @endforeach
                            </form>
                        </td>
                        <td class="todo-table__item">
                            <form class="delete-form" action="" method="post">
                                <div class="delete-form__button">
                                <button class="delete-form__button-submit" type="submit">削除</button>
                                </div>
                            </form>
                        </td>
                    </tr>

                </table>
            </div>
        </div>
    </main>
</body>

</html>