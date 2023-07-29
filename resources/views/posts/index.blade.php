<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <title>CaloBank</title>
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    <style>
        /* 追加したCSS */
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            flex-direction: column;
            font-family: 'Nunito', sans-serif; /* Nunitoフォントを使用 */
            font-size: 36px; /* フォントサイズを大きく */
            color: #800080; /* 背景に対して対照的な紫色の文字色 */
            background-color: #FFC0CB; /* 薄いピンク色の背景 */
            background-image: url("sparkles.png"); /* キラキラ画像を追加 */
            background-repeat: repeat; /* 画像を繰り返し表示 */
        }

        h1 {
            font-size: 72px; /* タイトルのフォントサイズを大きく */
            color: #FF1493; /* もっと派手なピンク色 */
            margin-bottom: 40px; /* タイトルとリンクの間にスペースを追加 */
            text-shadow: 4px 4px 4px rgba(0, 0, 0, 0.3); /* タイトルに影を追加 */
        }

        .link {
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <h1>カロリー貯金</h1>
    <div class='posts'>
    </div>
    <div class="link">
        <a href="/login">ログイン</a>
    </div>
    <div class="link">
        <a href="/register">新規登録</a>
    </div>
</body>
</html>
