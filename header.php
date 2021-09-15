<!DOCTYPE html>
<html lang="ja">

<head>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-7NE8DN9J64"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'G-7NE8DN9J64');
    </script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- ogp設定 -->
    <meta property="og:url" content="https://halu-store.com/" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="HALU-STORE" />
    <meta property="og:description" content="コーヒーやホットドッグやちょっとしたおやつ&お洋服・雑貨も楽しめるお店です。" />
    <meta property="og:site_name" content="HALU-STORE" />
    <meta property="og:image" content="<?php echo get_template_directory_uri() ?>/image/halu_marulogo.png" />

    <!-- css -->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/css/sanitize.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/css/app.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/css/halustore.css">
    <link rel="stylesheet" href="https://use.typekit.net/bsy2knc.css">


    <!-- jquery -->
    <?php wp_deregister_script('jquery');
    wp_enqueue_script('jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js', array(), '3.3.1');
    ?>
    <script src="<?php echo get_template_directory_uri() ?>/js/ScrollReveal.js"></script>

    <!-- jquery　スライダー-->

    <!-- fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">

    <?php wp_head(); ?>

    <title>HALU STORE</title>

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-7NE8DN9J64"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'G-7NE8DN9J64');
    </script>
</head>


<body>
    <!------------------------------- ヘッダー -------------------------------------->
    <header>
        <div class="head w-100" id="js-mainVisual">
            <div class="hamburger">
                <span></span>
                <span></span>
                <span></span>
            </div>

            <nav class="globalMenuSp">
                <?php
                wp_nav_menu(array(
                    'theme_location' => 'main-menu'
                ));
                ?>
            </nav>

        </div>
        <!-- <div class="head_logo"><img src="<?php echo get_template_directory_uri() ?>/image/logo.png" alt=""></div> -->
    </header>