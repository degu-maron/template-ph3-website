<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>POSSE website</title>
    <link rel="stylesheet" href="{{ asset('css/normalize.css') }}">
    <link rel="stylesheet" href="{{ asset('css/common.css') }}">
    {{-- @vite(['resources/css/common.css']) --}}
    <script src="{{ asset('js/common.js') }}" defer></script>
</head>

<body>
    <header id="js-header" class="l-header p-header">
        <div class="p-header__logo"><img src="{{ asset('/img/logo.svg') }}" alt="POSSE"></div>
        <button class="p-header__button" id="js-headerButton"></button>
        <div class="p-header__inner">
            <nav class="p-header__nav">
                <ul class="p-header__nav__list">
                    <li class="p-header__nav__item">
                        <a href="./" class="p-header__nav__item__link">POSSEとは</a>
                    </li>
                    <li class="p-header__nav__item">
                        <a href="./quiz.blade.php" class="p-header__nav__item__link">クイズ</a>
                    </li>
                </ul>
            </nav>
            <div class="p-header__official">
                <a href="https://line.me/R/ti/p/@651htnqp?from=page" target="_blank" rel="noopener noreferrer"
                    class="p-header__official__link--line">
                    <i class="u-icon__line"></i>
                    <span class="">POSSE公式LINEを追加</span>
                    <i class="u-icon__link"></i>
                </a>
                <a href="" class="p-header__official__link--website">POSSE 公式サイト<i class="u-icon__link"></i></a>
            </div>
            <ul class="p-header__sns p-sns">
                <li class="p-sns__item">
                    <a href="https://twitter.com/posse_program" target="_blank" rel="noopener noreferrer"
                        class="p-sns__item__link" aria-label="Twitter">
                        <i class="u-icon__twitter"></i>
                    </a>
                </li>
                <li class="p-sns__item">
                    <a href="https://www.instagram.com/posse_programming/" target="_blank" rel="noopener noreferrer"
                        class="p-sns__item__link" aria-label="instagram">
                        <i class="u-icon__instagram"></i>
                    </a>
                </li>
            </ul>
        </div>
    </header>
    {{ $slot }}
    <footer class="l-footer p-footer">
        <div class="p-fixedLine">
            <a href="https://line.me/R/ti/p/@651htnqp?from=page" target="_blank" rel="noopener noreferrer"
                class="p-fixedLine__link">
                <i class="u-icon__line"></i>
                <p class="p-fixedLine__link__text"><span class="u-sp-hidden">POSSE</span>公式LINEで<br>最新情報をGET！</p>
                <i class="u-icon__link"></i>
            </a>
        </div>
        <div class="l-footer__inner">
            <div class="p-footer__siteinfo">
                <span class="p-footer__logo">
                    <img src="{{ asset('/img/logo.svg') }}" alt="POSSE">
                </span>
                <a href="https://posse-ap.com/" target="_blank" rel="noopener noreferrer"
                    class="p-footer__siteinfo__link">POSSE公式サイト</a>
            </div>
            <div class="p-footer__sns">
                <ul class="p-sns__list p-footer__sns__list">
                    <li class="p-sns__item">
                        <a href="https://twitter.com/posse_program" target="_blank" rel="noopener noreferrer"
                            class="p-sns__item__link" aria-label="Twitter">
                            <i class="u-icon__twitter"></i>
                        </a>
                    </li>
                    <li class="p-sns__item">
                        <a href="https://www.instagram.com/posse_programming/" target="_blank" rel="noopener noreferrer"
                            class="p-sns__item__link" aria-label="instagram">
                            <i class="u-icon__instagram"></i>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="p-footer__copyright">
            <small lang="en">©︎2022 POSSE</small>
        </div>
    </footer>
</body>

</html>