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
        <div class="confirm-form__content">
            <div class="confirm-form__heading">
                <h2>管理システム</h2>
            </div>

            <div class="confirm__content">
                <form class="form" action="/contacts" method="post"><!-- POST メソッドで/contacts/confirmにアクセス -->
                    @csrf
                </form>
            </div>
        </div>
    </main>
</body>

</html>