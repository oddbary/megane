<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>プライム21</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.3/css/bulma.min.css">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@400;700&family=Poppins:wght@400;600&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://use.typekit.net/rrg6pdr.css">
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />
    <script src="https://kit.fontawesome.com/ba68847ce1.js" crossorigin="anonymous"></script>
</head>

<body>
    <header class="pt-4 pb-4">
        <div class="container is-widescreen">
            <div class="header-top is-flex is-justify-content-space-between content is-small mb-3">
                <div class="p-0 has-text-grey">
                    販促と企画のプロ集団！眼鏡専門店のネットワークグループ
                </div>
                <div class="is-flex has-text-weight-bold">
                    <a href="/login" class="c-header_toplinkitem pl-4 has-text-primary icon-text">
                        <span class="icon icon-slim"><i class="fas fa-caret-right"></i></span><span>ログイン</span>
                    </a>
                    <a href="#" class="c-header_toplinkitem pl-4 has-text-primary icon-text">
                        <span class="icon icon-slim"><i class="fas fa-caret-right"></i></span><span>アカウント作成</span>
                    </a>
                </div>
            </div>
            <div class="navbar mb-5">
                <div class="navbar-brand">
                    <a class="navbar-item" href="/">
                        <img src="img/logo.png" alt="プライム21">
                    </a>
                </div>
                <div class="navbar-end">
                    <div class="buttons">
                        <button class="button is-dark">
                            <a href="#">
                                <span class="icon">
                                    <i class="fas fa-envelope"></i>
                                </span>
                                <span>お問い合わせフォーム</span>
                            </a>
                        </button>
                        <button class="button is-primary">
                            <a href="#">
                                <span class="icon">
                                    <i class="fas fa-file"></i>
                                </span>
                                <span>無料で資料請求</span>
                            </a>
                        </button>
                    </div>
                </div>
            </div>
            <div id="global-nav">
                <div class="container is-widescreen c_mainnav">
                    <a href="/">
                        <img src="./img/gm1.svg"><span>ホーム</span>
                    </a>
                    <a href="/about">
                        <img src="./img/gm2.svg"><span>プライム21とは</span>
                    </a>
                    <a href="/planning">
                        <img src="./img/gm3.svg"><span>展示会・イベント情報</span>
                    </a>
                    <a href="/product">
                        <img src="./img/gm4.svg"><span>商品一覧</span>
                    </a>
                    <a href="/column">
                        <img src="./img/gm5.svg"><span>コラム</span>
                    </a>
                    <a href="/company">
                        <img src="./img/gm6.svg"><span>会社概要</span>
                    </a>
                </div>
            </div>
        </div>
        <script>
            /**
             * グローバルナビのクローンを生成
             */
            function setCloneNav() {
                var body = document.body;
                var globalNav = document.getElementById('global-nav');

                if (!globalNav) return;

                var cloneNav = globalNav.cloneNode(true);
                cloneNav.id = 'js-clone-nav';
                cloneNav.classList.add('clone-nav');

                body.insertBefore(cloneNav, body.firstChild);
            }
            setCloneNav();

            /**
             * グローバルナビのクローンをページ上部に移動・固定
             */
            function fixedGlobalNav() {
                var scrollY = window.pageYOffset;
                var trigger = document.getElementById('js-trigger');
                var cloneNav = document.getElementById('js-clone-nav');

                if (!cloneNav || !trigger) return;

                var triggerClientRect = trigger.getBoundingClientRect();
                var triggerY = scrollY + triggerClientRect.top;
                if (scrollY > triggerY) {
                    cloneNav.classList.add('is-fixed-nav');
                } else {
                    cloneNav.classList.remove('is-fixed-nav');
                }
            }
            window.addEventListener('scroll', fixedGlobalNav);
        </script>

        <div class="sp-header navbar-brand">
            <a class="navbar-item" href="/">
                <img src="./img/logo.png" alt="プライム21">
            </a>
            <div id="hamburger">
                <span></span>
            </div>
        </div>
        <nav class="sp-nav" id="sp-nav">
            <div class="sp-nav-ineer">
                <ul>
                    <li>
                        <a href="/">
                            <span>ホーム</span>
                        </a>
                    </li>
                    <li>
                        <a href="/about">
                            <span>プライム21とは</span>
                        </a>
                    </li>
                    <li>
                        <a href="/planning">
                            <span>展示会・イベント情報</span>
                        </a>
                    </li>
                    <li>
                        <a href="/product">
                            <span>商品一覧</span>
                        </a>
                    </li>
                    <li>
                        <a href="/column">
                            <span>コラム</span>
                        </a>
                    </li>
                    <li>
                        <a href="/company">
                            <span>会社概要</span>
                        </a>
                    </li>
                </ul>
                <div id="close" class="close"><span>CLOSE</span></div>
            </div>
        </nav>
        <script>
            var nav = document.getElementById('sp-nav');
            var hamburger = document.getElementById('hamburger');
            var close = document.getElementById('close');
           
            hamburger.addEventListener('click', function() {
              hamburger.classList.toggle('active');
              nav.classList.toggle('active');
            });
            close.addEventListener('click', function() {
              hamburger.classList.remove('active');
              nav.classList.remove('active');
            });
        </script>
    </header>