<?php
include('/header.php');
?>
<main>
        <section class="main-slide">
            <div class="swiper">
                <div class="swiper-wrapper">
                    <div class="swiper-slide"><a href="/about"><img src="img/slide-sample.png" alt="sample"></a></div>
                    <div class="swiper-slide"><a href="/column/column-detail"><img src="img/slide-sample.png" alt="sample"></a></div>
                    <div class="swiper-slide"><a href="/column/column-detail"><img src="img/slide-sample.png" alt="sample"></a></div>
                </div>
                <div class="swiper-pagination"></div>
                <!-- If we need navigation buttons -->
                <div class="swiper-button-prev"></div>
                <div class="swiper-button-next"></div>
            </div>
        </section>
        <div class="container is-widescreen main-wrap" id="js-trigger">
            <div class="columns">
                <div class="maincolumn column is-9">
                    <section class="mb-5">
                        <a class="top-banner" href="/diagnosis">
                            <img src="img/banner.png" alt="">
                        </a>
                    </section>
                    <section calss="infomation section">
                        <div class="c-sectionh level is-mobile">
                            <div class="level-left">
                                <div class="level-item">
                                    <i class="c-sectionh_icon"><img src="img/icon-infomation.svg" /></i>
                                </div>
                                <div class="level-item">
                                    <div>
                                        <h1 class="title">最新情報</h1>
                                        <h2 class="subtitle is-6 has-text-primary">INFOMATION</h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tabs is-boxed is-fullwidth">
                            <!--CSSでtabsのwhite-spaceをnoneに、overflow-xをなくさないとスクロールになってしまう-->
                            <ul class="info-category gap-1">
                                <li class="category-title is-active">
                                    <!--cssでcategory-titleのpadding-bottomを0にする-->
                                    <!--cssでhas-textのhoverをなくす-->
                                    <a class="has-text-white has-background-primary">
                                        <span>ニュース</span>
                                    </a>
                                </li>
                                <li class="category-title">
                                    <a class="has-text-primary-dark has-background-primary-light">
                                        <span>カテゴリ1</span>
                                    </a>
                                </li>
                                <li class="category-title">
                                    <a class="has-text-primary-dark has-background-primary-light">
                                        <span>カテゴリ2</span>
                                    </a>
                                </li>
                                <li class="category-title">
                                    <a class="has-text-primary-dark has-background-primary-light">
                                        <span>カテゴリ3</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div>
                            <div class="c-info_list">
                                <p>
                                    <a
                                        href="#">ニュースタイトルが入ります。ニュースタイトルが入ります。ニュースタイトルが入ります。ニュースタイトルが入ります。ニュースタイトルが入ります。</a>
                                </p>
                                <div class="c-under_info level is-mobile">
                                    <div class="level-left">
                                        <span class="tag level-item">
                                            カテゴリ名
                                        </span>
                                        <p class="dete level-item">2021.10.1 21:00</p>
                                     </div>   
                                </div>
                            </div>
                            <div class="c-info_list">
                                <p><a
                                        href="#">ニュースタイトルが入ります。ニュースタイトルが入ります。ニュースタイトルが入ります。ニュースタイトルが入ります。ニュースタイトルが入ります。</a>
                                </p>
                                <div class="c-under_info level is-mobile">
                                    <div class="level-left">
                                        <span class="tag level-item">
                                            カテゴリ名
                                        </span>
                                        <p class="dete level-item">2021.10.1 21:00</p>
                                     </div>   
                                </div>
                            </div>
                            <div class="c-info_list">
                                <p><a
                                        href="#">ニュースタイトルが入ります。ニュースタイトルが入ります。ニュースタイトルが入ります。ニュースタイトルが入ります。ニュースタイトルが入ります。</a>
                                </p>
                                <div class="c-under_info level is-mobile">
                                    <div class="level-left">
                                        <span class="tag level-item">
                                            カテゴリ名
                                        </span>
                                        <p class="dete level-item">2021.10.1 21:00</p>
                                     </div>   
                                </div>
                            </div>
                            <div class="c-info_list">
                                <p><a
                                        href="#">ニュースタイトルが入ります。ニュースタイトルが入ります。ニュースタイトルが入ります。ニュースタイトルが入ります。ニュースタイトルが入ります。</a>
                                </p>
                                <div class="c-under_info level is-mobile">
                                    <div class="level-left">
                                        <span class="tag level-item">
                                            カテゴリ名
                                        </span>
                                        <p class="dete level-item">2021.10.1 21:00</p>
                                     </div>   
                                </div>
                            </div>
                        </div>
                    </section>
                    <section class="article-list section">
                        <div class="article-items columns is-flex-wrap-wrap">
                            <div class="article-item column is-half">
                                <a href="">
                                    <div class="article-image-wrap">
                                        <img src="img/article-image.png" alt="">
                                        <span class="article-category-label">経営者コラム</span>
                                    </div>
                                    <h3 class="title is-6">コラムのタイトルが入ります。コラムのタイトルが入ります。コラムのタイトルが入</h3>
                                    <div class="under-article level is-mobile">
                                        <div class="level-left">
                                            <span class="tag red level-item">
                                                NEW
                                            </span>
                                            <p class="dete level-item">2020.11.3</p>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="article-item column is-half">
                                <a href="">
                                    <div class="article-image-wrap">
                                        <img src="img/article-image.png" alt="">
                                        <span class="article-category-label">経営者コラム</span>
                                    </div>
                                    <h3 class="title is-6">コラムのタイトルが入ります。コラムのタイトルが入ります。コラムのタイトルが入</h3>
                                    <div class="under-article level is-mobile">
                                        <div class="level-left">
                                            <span class="tag red level-item">
                                                NEW
                                            </span>
                                            <p class="dete level-item">2020.11.3</p>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="article-item column is-half">
                                <a href="">
                                    <div class="article-image-wrap">
                                        <img src="img/article-image.png" alt="">
                                        <span class="article-category-label">経営者コラム</span>
                                    </div>
                                    <h3 class="title is-6">コラムのタイトルが入ります。コラムのタイトルが入ります。コラムのタイトルが入</h3>
                                    <div class="under-article level is-mobile">
                                        <div class="level-left">
                                            <span class="tag red level-item">
                                                NEW
                                            </span>
                                            <p class="dete level-item">2020.11.3</p>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="article-item column is-half">
                                <a href="">
                                    <div class="article-image-wrap">
                                        <img src="img/article-image.png" alt="">
                                        <span class="article-category-label">経営者コラム</span>
                                    </div>
                                    <h3 class="title is-6">コラムのタイトルが入ります。コラムのタイトルが入ります。コラムのタイトルが入</h3>
                                    <div class="under-article level is-mobile">
                                        <div class="level-left">
                                            <span class="tag red level-item">
                                                NEW
                                            </span>
                                            <p class="dete level-item">2020.11.3</p>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="article-item column is-half">
                                <a href="">
                                    <div class="article-image-wrap">
                                        <img src="img/article-image.png" alt="">
                                        <span class="article-category-label">経営者コラム</span>
                                    </div>
                                    <h3 class="title is-6">コラムのタイトルが入ります。コラムのタイトルが入ります。コラムのタイトルが入</h3>
                                    <div class="under-article level is-mobile">
                                        <div class="level-left">
                                            <span class="tag red level-item">
                                                NEW
                                            </span>
                                            <p class="dete level-item">2020.11.3</p>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="article-item column is-half">
                                <a href="">
                                    <div class="article-image-wrap">
                                        <img src="img/article-image.png" alt="">
                                        <span class="article-category-label">経営者コラム</span>
                                    </div>
                                    <h3 class="title is-6">コラムのタイトルが入ります。コラムのタイトルが入ります。コラムのタイトルが入</h3>
                                    <div class="under-article level is-mobile">
                                        <div class="level-left">
                                            <span class="tag red level-item">
                                                NEW
                                            </span>
                                            <p class="dete level-item">2020.11.3</p>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <button class="button column button-all is-light m-auto is-half">
                            <span>コラム一覧へ</span>
                        </button>
                    </section>
                    <section class="planning section">
                        <div class="c-sectionh level is-mobile">
                            <div class="level-left">
                                <div class="level-item">
                                    <i class="c-sectionh_icon"><img src="img/icon-planning.svg" /></i>
                                </div>
                                <div class="level-item">
                                    <div>
                                        <h1 class="title">販促企画情報</h1>
                                        <h2 class="subtitle is-6 has-text-primary">PLANNING</h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="planning-items columns is-flex-wrap-wrap">
                            <div class="planning-item column is-one-third">
                                <div class="img-block"><a href=""><img src="img/planning-image.png" alt=""></a></div>
                                <h3 class="title is-6"><a href="">2013年10月販促情報</a></h3>
                            </div>
                            <div class="planning-item column is-one-third">
                                <div class="img-block"><a href=""><img src="img/planning-image.png" alt=""></a></div>
                                <h3 class="title is-6"><a href="">2013年10月販促情報</a></h3>
                            </div>
                            <div class="planning-item column is-one-third">
                                <div class="img-block"><a href=""><img src="img/planning-image.png" alt=""></a></div>
                                <h3 class="title is-6"><a href="">2013年10月販促情報</a></h3>
                            </div>
                            <div class="planning-item column is-one-third">
                                <div class="img-block"><a href=""><img src="img/planning-image.png" alt=""></a></div>
                                <h3 class="title is-6"><a href="">2013年10月販促情報</a></h3>
                            </div>
                            <div class="planning-item column is-one-third">
                                <div class="img-block"><a href=""><img src="img/planning-image.png" alt=""></a></div>
                                <h3 class="title is-6"><a href="">2013年10月販促情報</a></h3>
                            </div>
                            <div class="planning-item column is-one-third">
                                <div class="img-block"><a href=""><img src="img/planning-image.png" alt=""></a></div>
                                <h3 class="title is-6"><a href="">2013年10月販促情報</a></h3>
                            </div>
                        </div>
                        <button class="button column button-all is-light m-auto is-half">
                            <span>販促情報一覧へ</span>
                        </button>
                    </section>
                    <section class="products section">
                        <div class="c-sectionh level is-mobile">
                            <div class="level-left">
                                <div class="level-item">
                                    <i class="c-sectionh_icon"><img src="img/icon-products.svg" /></i>
                                </div>
                                <div class="level-item">
                                    <div>
                                        <h1 class="title">最新商品</h1>
                                        <h2 class="subtitle is-6 has-text-primary">PRODUCTS</h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="products-items columns is-flex-wrap-wrap">
                            <div class="products-item column is-one-third">
                                <div class="img-block"><a href="#"><img src="img/products-image.png" alt=""></a></div>
                                <div class="products-info">
                                    <div>
                                        <p class="products-name"><a href="#">商品名が入ります商品名が入ります</a></p>
                                        <p class="brand-name">ブランド名</p>
                                    </div>
                                    <div class="price-info level is-mobile">
                                        <div class="level-left">
                                            <span class="is-size-7">上代価格</span>
                                            <p class="price is-size-5">10,000<span class="is-size-7">円</span></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="products-item column is-one-third">
                                <div class="img-block"><a href="#"><img src="img/products-image.png" alt=""></a></div>
                                <div class="products-info">
                                    <div>
                                        <p class="products-name"><a href="#">商品名が入ります商品名が入ります</a></p>
                                        <p class="brand-name">ブランド名</p>
                                    </div>
                                    <div class="price-info level is-mobile">
                                        <div class="level-left">
                                            <span class="is-size-7">上代価格</span>
                                            <p class="price is-size-5">10,000<span class="is-size-7">円</span></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="products-item column is-one-third">
                                <div class="img-block"><a href="#"><img src="img/products-image.png" alt=""></a></div>
                                <div class="products-info">
                                    <div>
                                        <p class="products-name"><a href="#">商品名が入ります商品名が入ります</a></p>
                                        <p class="brand-name">ブランド名</p>
                                    </div>
                                    <div class="price-info level is-mobile">
                                        <div class="level-left">
                                            <span class="is-size-7">上代価格</span>
                                            <p class="price is-size-5">10,000<span class="is-size-7">円</span></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="products-item column is-one-third">
                                <div class="img-block"><a href="#"><img src="img/products-image.png" alt=""></a></div>
                                <div class="products-info">
                                    <div>
                                        <p class="products-name"><a href="#">商品名が入ります商品名が入ります</a></p>
                                        <p class="brand-name">ブランド名</p>
                                    </div>
                                    <div class="price-info level is-mobile">
                                        <div class="level-left">
                                            <span class="is-size-7">上代価格</span>
                                            <p class="price is-size-5">10,000<span class="is-size-7">円</span></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="products-item column is-one-third">
                                <div class="img-block"><a href="#"><img src="img/products-image.png" alt=""></a></div>
                                <div class="products-info">
                                    <div>
                                        <p class="products-name"><a href="#">商品名が入ります商品名が入ります</a></p>
                                        <p class="brand-name">ブランド名</p>
                                    </div>
                                    <div class="price-info level is-mobile">
                                        <div class="level-left">
                                            <span class="is-size-7">上代価格</span>
                                            <p class="price is-size-5">10,000<span class="is-size-7">円</span></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="products-item column is-one-third">
                                <div class="img-block"><a href="#"><img src="img/products-image.png" alt=""></a></div>
                                <div class="products-info">
                                    <div>
                                        <p class="products-name"><a href="#">商品名が入ります商品名が入ります</a></p>
                                        <p class="brand-name">ブランド名</p>
                                    </div>
                                    <div class="price-info level is-mobile">
                                        <div class="level-left">
                                            <span class="is-size-7">上代価格</span>
                                            <p class="price is-size-5">10,000<span class="is-size-7">円</span></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <button class="button column button-all is-light m-auto is-half">
                            <!--なぜかbuttonをis-primryにした時だけbackground-colorが上書きされないため、is-successで代用-->
                            <span>商品一覧へ</span>
                        </button>
                    </section>
                    <section class="interview section">
                        <div class="mb-4">
                            <a class="bottom-banner" href="">
                                <!--aのhrefとimgのaltの設定お願いします-->
                                <img src="img/bottom-banner.png" alt="">
                            </a>
                        </div>
                        <div class="interview-items is-flex-wrap-wrap tile">
                            <div class="interview-item tile is-parent is-3">
                                <div class="tile is-child box">
                                    <!--aのhrefとimgのaltの設定お願いします-->
                                    <a href="">
                                        <img src="img/interview-image.png" alt="">
                                        <div class="interview-info">
                                            <p class="corp-name">株式会社◯◯代表</p>
                                            <p class="interview-name">山田太郎さん</p>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="interview-item tile is-parent is-3">
                                <div class="tile is-child box">
                                    <!--aのhrefとimgのaltの設定お願いします-->
                                    <a href="">
                                        <img src="img/interview-image.png" alt="">
                                        <div class="interview-info">
                                            <p class="corp-name">株式会社◯◯代表</p>
                                            <p class="interview-name">山田太郎さん</p>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="interview-item tile is-parent is-3">
                                <div class="tile is-child box">
                                    <!--aのhrefとimgのaltの設定お願いします-->
                                    <a href="">
                                        <img src="img/interview-image.png" alt="">
                                        <div class="interview-info">
                                            <p class="corp-name">株式会社◯◯代表</p>
                                            <p class="interview-name">山田太郎さん</p>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="interview-item tile is-parent is-3">
                                <div class="tile is-child box">
                                    <!--aのhrefとimgのaltの設定お願いします-->
                                    <a href="">
                                        <img src="img/interview-image.png" alt="">
                                        <div class="interview-info">
                                            <p class="corp-name">株式会社◯◯代表</p>
                                            <p class="interview-name">山田太郎さん</p>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="interview-item tile is-parent is-3">
                                <div class="tile is-child box">
                                    <!--aのhrefとimgのaltの設定お願いします-->
                                    <a href="">
                                        <img src="img/interview-image.png" alt="">
                                        <div class="interview-info">
                                            <p class="corp-name">株式会社◯◯代表</p>
                                            <p class="interview-name">山田太郎さん</p>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="interview-item tile is-parent is-3">
                                <div class="tile is-child box">
                                    <!--aのhrefとimgのaltの設定お願いします-->
                                    <a href="">
                                        <img src="img/interview-image.png" alt="">
                                        <div class="interview-info">
                                            <p class="corp-name">株式会社◯◯代表</p>
                                            <p class="interview-name">山田太郎さん</p>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="interview-item tile is-parent is-3">
                                <div class="tile is-child box">
                                    <!--aのhrefとimgのaltの設定お願いします-->
                                    <a href="">
                                        <img src="img/interview-image.png" alt="">
                                        <div class="interview-info">
                                            <p class="corp-name">株式会社◯◯代表</p>
                                            <p class="interview-name">山田太郎さん</p>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="interview-item tile is-parent is-3">
                                <div class="tile is-child box">
                                    <!--aのhrefとimgのaltの設定お願いします-->
                                    <a href="">
                                        <img src="img/interview-image.png" alt="">
                                        <div class="interview-info">
                                            <p class="corp-name">株式会社◯◯代表</p>
                                            <p class="interview-name">山田太郎さん</p>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
                <div class="sidebar column is-3">
                    <section class="sidebar-images">
                        <a href="">
                            <img src="img/sidebar-image1.png" alt="">
                        </a>
                        <a href="">
                            <img src="img/sidebar-image2.png" alt="">
                        </a>
                        <a href="">
                            <img src="img/sidebar-image3.png" alt="">
                        </a>
                    </section>
                    <section class="sidebar-menu-section section">
                        <div class="control search-wrap">
                            <input class="input" type="text" placeholder="サイト内を検索">
                            <button type="submit"></button>
                        </div>
                        <div class="sidebar-menu menu">
                            <div class="sidebar-menu-label menu-label">
                                <img src="img/icon-menu.png">
                                <span>コラムカテゴリー一覧</span>
                            </div>
                            <ul class="category-menu-list menu-list">
                                <li><a href="#">経営者コラム</a></li>
                                <li><a href="#">企画販促コラム</a></li>
                                <li><a href="#">主催者コラム</a></li>
                                <li><a href="#">特選品コラム</a></li>
                            </ul>
                        </div>
                        <div class="sidebar-menu menu">
                            <div class="sidebar-menu-label menu-label">
                                <img src="img/icon-shop.png">
                                <span>加盟店一覧</span>
                            </div>
                            <ul class="sidebar-menu-list menu-list">
                                <li class="sidebar-menu-label-second">
                                    <p>北海道・東北</p>
                                </li>
                                <li><a href="#">サカイ</a></li>
                            </ul>
                            <ul class="sidebar-menu-list menu-list">
                                <li class="sidebar-menu-label-second">
                                    <p>関東</p>
                                </li>
                                <li><a href="#">シティメガネ城田</a></li>
                                <li><a href="#">イナリヤ</a></li>
                                <li><a href="#">メガネのセイコー（北習志野店）</a></li>
                                <li><a href="#">銀美堂時計総本店</a></li>
                            </ul>
                            <ul class="sidebar-menu-list menu-list">
                                <li class="sidebar-menu-label-second">
                                    <p>中部</p>
                                </li>
                                <li><a href="#">キタオカ</a></li>
                                <li><a href="#">ミヤコヤ（十日町市 妻有SC店）</a></li>
                                <li><a href="#">マルイチ</a></li>
                                <li><a href="#">ミヤコヤ（長岡市）</a></li>
                            </ul>
                            <ul class="sidebar-menu-list menu-list">
                                <li class="sidebar-menu-label-second">
                                    <p>関西</p>
                                </li>
                                <li><a href="#">プロショップツチヤ</a></li>
                            </ul>
                            <ul class="sidebar-menu-list menu-list">
                                <li class="sidebar-menu-label-second">
                                    <p>中国</p>
                                </li>
                                <li><a href="#">ナカダヤ</a></li>
                                <li><a href="#">せと</a></li>
                                <li><a href="#">コンドウ</a></li>
                                <li><a href="#">めがね高島屋</a></li>
                            </ul>
                        </div>
                    </section>
                    <section class="sidebar-images">
                        <a href="">
                            <img src="img/sidebar-image4.png" alt="">
                        </a>
                    </section>
                </div>
            </div>
        </div>
    </main>
    <script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>
    <script type="module">
        import Swiper from 'https://unpkg.com/swiper@7/swiper-bundle.esm.browser.min.js'

        var swiper = new Swiper('.swiper', {
            centeredSlides: true,
            slidesPerView: 1.8,
            spaceBetween: 16,
            loop: true,
            pagination: {
                el: '.swiper-pagination',
                clickable: true,
            },
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
        });
    </script>
<?php
include('/footer.php');
?>