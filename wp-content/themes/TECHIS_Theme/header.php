<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-type" content="text/html;charset=UTF-8" />
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <?php wp_head(); ?>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.2/css/all.css">
</head>
<body>
    <header>
        <!--インナー-->
        <div class="header__inner">
            <!--ロゴ画像-->
            <img class="header__logo" src="<?php bloginfo('template_url'); ?>/img/logo.png">

            <!--画面幅が480px以上の時に表示されるナビ欄-->
            <div class="header__navgroup pc__nav">
                <!--ナビ-->
                <div class="header__navitem"><a href="<?php bloginfo('url'); ?>#about">About</a></div>
                <div class="header__navitem"><a href="<?php bloginfo('url'); ?>#service">Service</a></div>
                <div class="header__navitem"><a href="<?php bloginfo('url'); ?>#news">News</a></div>
                <div class="header__navitem header__contact"><i class="fas fa-file-signature"></i>Contact<a class="a__btn" href="<?php bloginfo('url'); ?>/contact"></a></div>
            </div>

            <!-- 画面幅が480px以下の時に表示されるナビ欄 -->
            <div id="nav" class="header__navgroup sp__nav">
                <!--ナビ-->
                <div class="header__navitem"><a id="nav__about" href="<?php bloginfo('url'); ?>#about">About</a></div>
                <div class="header__navitem"><a id="nav__service" href="<?php bloginfo('url'); ?>#service">Service</a></div>
                <div class="header__navitem"><a id="nav__news" href="<?php bloginfo('url'); ?>#news">News</a></div>
                <div class="header__navitem header__contact"><i class="fas fa-file-signature"></i>Contact<a class="a__btn" href="<?php bloginfo('url'); ?>/contact"></a></div>
            </div>
            <!--モーダル 追加-->
            <div id="hamburger__modal" class="hamburger__modal"></div>
            <!--ハンバーガーメニューボタン 追加-->
            <div id="hamburger__btn" class="hamburger__btn"><i class="fas fa-bars"></i></div> 

            <script>
                const nav = document.getElementById('nav');
                const navAbout = document.getElementById('nav__about');
                const navService = document.getElementById('nav__service');
                const navNews = document.getElementById('nav__news');

                //ハンバーガーメニューボタンをクリックしたときに実行される関数
                document.getElementById('hamburger__btn').addEventListener('click', function() {
                    //ナビ一覧とモーダルを表示
                    nav.classList.add('open');
                    document.getElementById('hamburger__modal').style.display = "block";
                });

                //ハンバーガーメニューが表示されている時、モーダルがクリックされると実行される関数
                document.getElementById('hamburger__modal').addEventListener('click', function() {
                    //ナビ一覧とモーダルを非表示
                    nav.classList.remove('open');
                    document.getElementById('hamburger__modal').style.display = "none";
                });

                // ハンバーガーメニューが表示されている時、Aboutがクリックされると実行される関数
                navAbout.addEventListener('click', function() {
                    //ナビ一覧とモーダルを非表示
                    nav.classList.remove('open');
                        document.getElementById('hamburger__modal').style.display = "none";
                });

                // ハンバーガーメニューが表示されている時、Serviceがクリックされると実行される関数
                navService.addEventListener('click', function() {
                    //ナビ一覧とモーダルを非表示
                    nav.classList.remove('open');
                        document.getElementById('hamburger__modal').style.display = "none";
                });

                // ハンバーガーメニューが表示されている時、Newsがクリックされると実行される関数
                navNews.addEventListener('click', function() {
                    //ナビ一覧とモーダルを非表示
                    nav.classList.remove('open');
                        document.getElementById('hamburger__modal').style.display = "none";
                });
            </script>
        </div>
</header>
<div class="main">