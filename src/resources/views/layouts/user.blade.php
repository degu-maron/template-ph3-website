<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ $title }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Google Fonts読み込み -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link
            href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@400;700&family=Plus+Jakarta+Sans:wght@400;700&display=swap"
            rel="stylesheet">
        <!-- Scripts -->
        <link rel="stylesheet" href="{{ asset('/css/normalize.css')  }}" >
        <link rel="stylesheet" href="{{ asset('/css/common.css')  }}" >
        @vite(['resources/css/app.css', 'resources/js/app.js'])


        @if (isset($head))
            {{ $head }}
        @endif
    </head>
    <body>
        <!-- Page Heading -->
        @if (isset($header))
            {{ $header }}
        @endif

        <!-- Page Content -->
        <main class="l-main">
            {{ $slot }}
        </main>

        <!-- Page Footer -->
        @if (isset($footer))
            {{ $footer }}
        @endif
    </body>
</html>