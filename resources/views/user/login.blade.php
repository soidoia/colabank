<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <title>CaloBank - ログイン</title>
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    <style>
        /* 共通のスタイル */
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            flex-direction: column;
            font-family: 'Nunito', sans-serif;
            font-size: 24px;
            color: #800080;
            background-color: #FFC0CB;
            background-image: url("sparkles.png");
            background-repeat: repeat;
        }

        h1 {
            font-size: 36px;
            color: #FF1493;
            margin-bottom: 40px;
            text-shadow: 4px 4px 4px rgba(0, 0, 0, 0.3);
        }

        /* ログインフォームのスタイル */
        form {
            display: flex;
            flex-direction: column;
            align-items: center;
            width: 300px;
            padding: 20px;
            border: 1px solid #FF69B4;
            border-radius: 10px;
            background-color: #FFFFFF;
        }

        label {
            font-weight: bold;
        }

        input[type="text"],
        input[type="password"] {
            width: 100%;
            margin-bottom: 10px;
            padding: 8px;
            border: 1px solid #FF69B4;
            border-radius: 5px;
            outline: none;
        }

        input[type="submit"] {
            width: 100%;
            padding: 10px;
            border: none;
            border-radius: 5px;
            background-color: #FF69B4;
            color: #FFFFFF;
            font-weight: bold;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #FF1493;
        }

        .link {
            margin-top: 20px;
        }

        .link a {
            color: #800080;
            text-decoration: none;
        }

        .link a:hover {
            color: #FF1493;
        }
    </style>
</head>
<body>
    <h1>カロリー貯金 - ログイン</h1>
    <form action="{{ route('posts.process', 'login') }}" method="post">
        @csrf
        <label for="username">アカウント名:</label>
        <input type="text" id="username" name="username">
        <label for="password">パスワード:</label>
        <input type="password" id="password" name="password">
        <input type="submit" value="ログイン">
    </form>
    <div class="link">
        <a href="{{ route('posts.page', 'register') }}">新規登録</a>
    </div>
</body>
</html>
