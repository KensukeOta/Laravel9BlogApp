<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ $title ?? 'Laravel9 BlogApp' }}</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <link href="/css/app.css" rel="stylesheet">
    </head>
    <body class="antialiased">
        <header>
            <a href="/">
                <h1>Laravel9BlogApp</h1>
            </a>
            <nav>
                <a href="/signup">新規登録</a>
                <a href="/login">ログイン</a>
            </nav>
        </header>
        {{ $slot }}
        <footer>
            <small>&copy; OtaKensuke</small>
        </footer>
    </body>
</html>
