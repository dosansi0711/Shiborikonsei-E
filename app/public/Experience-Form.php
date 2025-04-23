<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
        <title>Interior Design</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="icon" href="src/img/こんせいロゴ（バンタン様へ）.jpg">
        <link rel="apple-touch-icon" href="src/img/こんせいロゴ（バンタン様へ）.jpg">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Zen+Kaku+Gothic+New:wght@400;500;700&family=Zen+Old+Mincho:wght@400&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://unpkg.com/ress/dist/ress.min.css">
        <link rel="stylesheet" href="src/css/styl.css">
        <link rel="stylesheet" href="src/css/Contact.css">
        <link rel="stylesheet" href="src/css/Experience-Form.css">
        <!-- <link rel="stylesheet" href="css/top.css"> -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
        <script src="src/js/jquery.inview.min.js"></script>
        <script src="src/js/main.js"></script>
</head>
<body>
    <?php include "src/include/header.php"; ?>
    <main>
        <section class="contact-form wrapper">
            
            <form action="" method="post">
                <h2 class="section-title">お申し込み</h2>
                <dl>
                    <dt><label for="name">お名前（必須）</label></dt>
                    <dd><input id="name" type="text" name="name"></dd>
                    <dt><label for="tel">電話番号（必須）</label></dt>
                    <dd><input id="tel" type="tel" name="tel"></dd>
                    <dt><label for="email">メールアドレス（必須）</label></dt>
                    <dd><input id="email" type="text" name="email"></dd>

                    <dt><label for="email">体験希望日 (必須)</label></dt>
                    <dd><input id="email" type="text" name="email"></dd>
                    <dt><label for="email">参加人数 (必須)</label></dt>
                    <dd><input id="email" type="text" name="email"></dd>
                    <dt><label for="email">体験内容 (必須)</label></dt>
                    <dd><input id="email" type="text" name="email"></dd>

                    <dt><label for="message">メッセージ</label></dt>
                    <dd><textarea id="message" name="message" id=""></textarea></dd>
                </dl>
                <p class="contact-message">皆様からのお問い合わせ・ご意見などをお待ちしております。
                    お問い合わせの内容によっては、ご返信まで少々お時間をいただく場合がございますので、
                    あらかじめご了承ください。
                    メールフォームがご利用になれない場合、またお急ぎの場合はお電話でお問い合わせください。
                    TEL.052-624-0029　　　※ 9:00～18:00 土日祝除く
                    ご提供いただいた個人情報は、ご本人様の同意がある場合、
                    または正当な理由がある場合を除き、第三者に開示または提供いたしません。</p>
                <div class="btn"><input type="submit" value="送信"></div>
            </form>
        </section>
    </main>
    <?php include "src/include/footer.php"; ?>
</body>
</html>