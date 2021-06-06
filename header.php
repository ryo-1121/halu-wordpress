<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- css -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.7/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/css/sanitize.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/css/app.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/css/halustore.css">
    <link rel="stylesheet" href="https://use.typekit.net/bsy2knc.css">

    <!-- jquery -->
    <?php
    wp_deregister_script('jquery');
    wp_enqueue_script('jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js', array(), '3.3.1');
    ?>
    <script src="<?php echo get_template_directory_uri() ?>/js/ScrollReveal.js"></script>

    <!-- fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Sawarabi+Gothic&display=swap" rel="stylesheet">

    <?php wp_head(); ?>

    <title>HALU STORE</title>
</head>


<body>
    <!------------------------------- ヘッダー -------------------------------------->
    <header>
        <div class="head w-100">
            <div class="hamburger">
                <span></span>
                <span></span>
                <span></span>
            </div>

            <nav class="globalMenuSp">
                <ul>
                    <li><a href="top">TOP</a></li>
                    <li><a href="cafe-menu">CAFE MENU</a></li>
                    <li><a href="blogarchive">BLOG</a></li>
                    <li><a href="fashion">FASHION</a></li>
                    <li><a href="access">ACCESS</a></li>
                    <li><a href="contact">CONTACT</a></li>
                </ul>
            </nav>
        </div>
        <div class="head_logo"><img src="<?php echo get_template_directory_uri() ?>/image/logo.png" alt=""></div>
    </header>