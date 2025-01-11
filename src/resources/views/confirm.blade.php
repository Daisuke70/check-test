<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact form</title>
    <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/confirm.css') }}" />
</head>
<body>
<header class="header">
    <div class="header__inner">
        <a class="header__logo" href="/">
            FashionablyLate
        </a>
    </div>
</header>

<main>
    <div class="contact-form__content">
        <div class="contact-form__heading">
            <h2>Confirm</h2>
        </div>
        <form class="form">
        <div class="confirm-table">
            <table class="confirm-table__inner" border="1">
                <tr class="confirm-table__row">
                    <th class="confirm-table__header">お名前</th>
                    <td class="confirm-table__text">
                    <input type="text" name="last-name"  value="{{$contact['last-name']}}" readonly /><!--
                    -->&emsp;<input type="text" name="first-name"  value="{{$contact['first-name']}}" readonly />
                    </td>
                </tr>

                <tr class="confirm-table__row">
                    <th class="confirm-table__header">性別</th>
                    <td class="confirm-table__text">
                    <input type="text" name="gender" value="{{$contact['gender']}}" readonly />
                </td>
                </tr>

                <tr class="confirm-table__row">
                    <th class="confirm-table__header">メールアドレス</th>
                    <td class="confirm-table__text">
                    <input type="email" name="email" value="{{$contact['email']}}" readonly />
                    </td>
                    </tr>

                <tr class="confirm-table__row">
                    <th class="confirm-table__header">電話番号</th>
                    <td class="confirm-table__text">
                    <input type="tel" name="tel-1" value="{{$contact['tel-1']}}" readonly /><!--
                    --><input type="tel" name="tel-2" value="{{$contact['tel-2']}}" readonly /><!--
                    --><input type="tel" name="tel-3" value="{{$contact['tel-3']}}" readonly />
                    </td>
                    </tr>

                <tr class="confirm-table__row">
                    <th class="confirm-table__header">住所</th>
                    <td class="confirm-table__text">
                    <input type="text" name="address" value="{{$contact['address']}}" readonly />
                    </td>
                    </tr>

                <tr class="confirm-table__row">
                    <th class="confirm-table__header">建物名</th>
                    <td class="confirm-table__text">
                    <input type="text" name="building" value="{{$contact['building']}}" readonly />
                    </td>
                    </tr>

                <tr class="confirm-table__row">
                    <th class="confirm-table__header">お問い合わせの種類</th>
                    <td class="confirm-table__text">
                    <?php
                    if(isset($_POST["confirms"])) {
                    $confirm = $_POST["confirms"];
                    echo $confirm;
                    }
                    ?>
                    </td>
                    </tr>
                
                <tr class="confirm-table__row">
                    <th class="confirm-table__header">お問い合わせ内容</th>
                    <td class="confirm-table__text">
                    <textarea class="confirm-txt" rows="4" cols="30" name="content">{{$contact['content']}}</textarea>
                    </td>

                </tr>
            </table>
        </div>
        </form>
        <div class="form__button">
            <button class="form__button-submit" type="submit">送信</button>
            <button class="form__button-modify" type="submit">修正</button>
        </div>
    </div>

</main>
</body>
</html>