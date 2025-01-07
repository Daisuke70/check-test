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
            <h2>Contact</h2>
        </div>

    <form class="form">
        <div class="form__group">
            <div class="form__group-title">
                <span class="form__label--item">お名前</span>
                <span class="form__label--required">※</span>
            </div>
        <div class="form__group-content">
            <div class="form__input--text">
                <input type="text" name="last-name" class="size-input-nameL" placeholder="例:山田" />
                <input type="text" name="first-name" class="size-input-nameF" placeholder="例:太郎" />
            </div>
            <div class="form__error">
              <!--バリデーション機能を実装したら記述します。-->
            </div>
        </div>
        </div>
        
        <div class="form__group">
            <div class="form__group-title">
                <span class="form__label--item">性別</span>
                <span class="form__label--required">※</span>
            </div>
        <div class="form__group-content">
            <div class="form__input--radio">
                <input id="male" type="radio" name="gender" value="male" checked="checked"><label for="male">男性</label>
                <input id="female" type="radio" name="gender" value="female"><label for="female">女性</label>
                <input id="other" type="radio" name="gender" value="other"><label for="other">その他</label>
            </div>
            <div class="form__error">
              <!--バリデーション機能を実装したら記述します。-->
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
                <input type="email" name="email" class="size-input-text" placeholder="例:test@example.com" />
            </div>
            <div class="form__error">
              <!--バリデーション機能を実装したら記述します。-->
            </div>
        </div>
        </div>

        <div class="form__group">
            <div class="form__group-title">
                <span class="form__label--item">電話番号</span>
                <span class="form__label--required">※</span>
            </div>
        <div class="form__group-content">
            <div class="form__input--text">
                <input type="tel" name="tel" class="size-input-tel-1" placeholder="080" /> -
                <input type="tel" name="tel" class="size-input-tel-2" placeholder="1234" /> -
                <input type="tel" name="tel" class="size-input-tel-3" placeholder="5678" />
            </div>
            <div class="form__error">
              <!--バリデーション機能を実装したら記述します。-->
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
            <input type="text" name="address" class="size-input-text" placeholder="例:東京都渋谷区千駄ヶ谷1-2-3" />
            </div>
            <div class="form__error">
              <!--バリデーション機能を実装したら記述します。-->
            </div>
        </div>
        </div>

        <div class="form__group">
            <div class="form__group-title">
                <span class="form__label--item">建物名</span>
            </div>
        <div class="form__group-content">
            <div class="form__input--text">
            <input type="text" name="building" class="size-input-text" placeholder="例:千駄ヶ谷マンション101" />
            </div>
            <div class="form__error">
              <!--バリデーション機能を実装したら記述します。-->
            </div>
        </div>
        </div>

        <div class="form__group">
            <div class="form__group-title">
                <span class="form__label--item">お問合せの種類</span>
                <span class="form__label--required">※</span>
            </div>
        <div class="form__group-content">
            <div class="form__input--select">
                <select name="confirm">
                    <option value="select" selected hidden>選択してください</option>
                    <option value="confirm1">商品のお届けについて</option>
                    <option value="confirm2">商品の交換について</option>
                    <option value="confirm3">商品トラブル</option>
                    <option value="confirm4">ショップへのお問い合わせ</option>
                    <option value="confirm5">その他</option>
                </select>
            <div class="form__error">
                <!--バリデーション機能を実装したら記述します。-->
            </div>
        </div>
        </div>
        </div>

        <div class="form__group">
            <div class="form__group-title">
                <span class="form__label--item">お問い合わせ内容</span>
            </div>
            <div class="form__group-content">
                <div class="form__input--textarea">
                    <textarea name="content" placeholder="お問い合せ内容をご記載ください"></textarea>
                </div>
            </div>
        </div>
        <div class="form__button">
            <button class="form__button-submit" type="submit">確認画面</button>
        </div>
    </form>
    </div>
</main>
</body>

</html>
