<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Contact Form</title>
    <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/thanks.css') }}" />
</head>

<body>
    <div class="thanks__content">
        <div class="thanks__heading">
            <p>ご意見いただきありがとうございました。</p>
        </div>
        <form action="">
        @csrf
            <div class="form__button">
                <button class="form__button-submit" type="submit">トップページへ</button>
            </div>
        </form>
    </div>
</body>

</html>