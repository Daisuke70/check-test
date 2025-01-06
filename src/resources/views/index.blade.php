<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FashionablyLate - Contact</title>
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
        <>FashionablyLate<
        Contact
        <form action="#" method="post">
            <!-- 名前 -->
            <label for="name">お名前<span class="required">※</span></label>
            <div class="flex-row">
                <input type="text" name="last-name" placeholder="例: 山田" required>
                <input type="text" name="first-name" placeholder="例: 太郎" required>
            </div>

            <!-- 性別 -->
            <label>性別<span class="required">※</span></label>
            <div class="gender-group">
                <label><input type="radio" name="gender" value="男性" required> 男性</label>
                <label><input type="radio" name="gender" value="女性"> 女性</label>
                <label><input type="radio" name="gender" value="その他"> その他</label>
            </div>

            <!-- メールアドレス -->
            <label for="email">メールアドレス<span class="required">※</span></label>
            <input type="email" name="email" placeholder="例: test@example.com" required>

            <!-- 電話番号 -->
            <label>電話番号<span class="required">※</span></label>
            <div class="flex-row">
                <input type="text" name="phone1" placeholder="080" required>
                <input type="text" name="phone2" placeholder="1234" required>
                <input type="text" name="phone3" placeholder="5678" required>
            </div>

            <!-- 住所 -->
            <label>住所<span class="required">※</span></label>
            <input type="text" name="address" placeholder="例: 東京都渋谷区千駄ヶ谷1-2-3" required>

            <!-- 建物名 -->
            <label>建物名</label>
            <input type="text" name="building" placeholder="例: 千駄ヶ谷マンション101">

            <!-- 問い合わせ種類 -->
            <label for="category">お問い合わせの種類<span class="required">※</span></label>
            <select name="category" required>
                <option value="" disabled selected>選択してください</option>
                <option value="質問">質問</option>
                <option value="相談">相談</option>
                <option value="その他">その他</option>
            </select>

            <!-- 問い合わせ内容 -->
            <label for="message">お問い合わせ内容<span class="required">※</span></label>
            <textarea name="message" rows="5" placeholder="お問い合わせ内容をご記載ください" required></textarea>

            <!-- 送信ボタン -->
            <button type="submit">確認画面</button>
        </form>
    </header>
</body>
</html>