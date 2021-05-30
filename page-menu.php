<?php
/*
Template Name: メニュー
*/
?>


<?php get_header(); ?>

    <!------------------------------- メニューページヘッド-------------------------------------->
    <div class="menupage_title">
        <p>Cafe Menu</p>
    </div>

    <!------------------------------- バックグランドﾍﾞｰｽ-------------------------------------->
    <div class="main_container">

        <!------------------------------- おすすめメニュー-------------------------------------->

        <div class="pickup_menu row">
            <div class="pickup_menu_left col-md-8">
                <h2>Pick up Menu</h2>
                <img class="pickup_menu_left_pic" src="<?php echo get_template_directory_uri() ?>/image/hotchoco.jpg " alt=" ">
            </div>
            <div class="pickup_menu_right col-md-4">
                <p>コーヒー豆はペルー産のオーガニックを使用。ペルー産のオーガニックの特徴として、 ほかの有機産地では使えないグアノという肥料を使用しています。 グアノはおいしさに直結する窒素成分が非常に多く、 味は心地よい甘い香りのするまろやかなコクの余韻があるコーヒーです。
                </p>
            </div>
        </div>
    </div>

    <!-------------------------------メニューバックグランド-------------------------------------->

    <div class="menu_container ">

        <!-------------------------------ドリンクメニュー------------------------------------>

        <div class="drink_title ">
            <p>DRINK</p>
        </div>
        <div class="menu_drink_cont">
            <ul class="menu_drink_list">
                <li class="menu_drink_list_box">
                    <img src="<?php echo get_template_directory_uri() ?>/image/CafeLatte.png" alt="">
                    <div class="drink_name">
                        <p>カフェ・ラテ</p>
                    </div>
                    <div class="price">
                        <p>
                            【HOT / ICE】¥350
                        </p>
                    </div>
                    <div class="price_taxin">
                        <p>(TAX IN)¥385</p>
                    </div>
                </li>
                <li class="menu_drink_list_box">
                    <img src="<?php echo get_template_directory_uri() ?>/image/CafeMocha.png" alt="">
                    <div class="drink_name">
                        <p>カフェ・モカ</p>
                    </div>
                    <div class="price">
                        <p>
                            【HOT / ICE】¥350
                        </p>
                    </div>
                    <div class="price_taxin">
                        <p>(TAX IN)¥385</p>
                    </div>
                </li>
                <li class="menu_drink_list_box">
                    <img src="<?php echo get_template_directory_uri() ?>/image/CaramelLatte.png" alt="">
                    <div class="drink_name">
                        <p>キャラメル・ラテ</p>
                    </div>
                    <div class="price">
                        <p>
                            【HOT / ICE】¥350
                        </p>
                    </div>
                    <div class="price_taxin">
                        <p>(TAX IN)¥385</p>
                    </div>
                </li>
                <li class="menu_drink_list_box">
                    <img src="<?php echo get_template_directory_uri() ?>/image/FreshLemonRooibos.png" alt="">
                    <div class="drink_name">
                        <p>レモンルイボスティー</p>
                    </div>
                    <div class="price">
                        <p>
                            【HOT / ICE】¥350
                        </p>
                    </div>
                    <div class="price_taxin">
                        <p>(TAX IN)¥385</p>
                    </div>
                </li>
                <li class="menu_drink_list_box">
                    <img src="<?php echo get_template_directory_uri() ?>/image/FreshOrangeRooibos.png" alt="">
                    <div class="drink_name">
                        <p>オレンジルイボスティー</p>
                    </div>
                    <div class="price">
                        <p>
                            【HOT / ICE】¥350
                        </p>
                    </div>
                    <div class="price_taxin">
                        <p>(TAX IN)¥385</p>
                    </div>
                </li>
                <li class="menu_drink_list_box">
                    <img src="<?php echo get_template_directory_uri() ?>/image/MatchaLatte.png" alt="">
                    <div class="drink_name">
                        <p>抹茶ラテ</p>
                    </div>
                    <div class="price">
                        <p>
                            【HOT / ICE】¥350
                        </p>
                    </div>
                    <div class="price_taxin">
                        <p>(TAX IN)¥385</p>
                    </div>
                </li>
                <li class="menu_drink_list_box">
                    <img src="<?php echo get_template_directory_uri() ?>/image/OrganicCoffee.png" alt="">
                    <div class="drink_name">
                        <p>オリジナルコーヒー</p>
                    </div>
                    <div class="price">
                        <p>
                            【HOT / ICE】¥350
                        </p>
                    </div>
                    <div class="price_taxin">
                        <p>(TAX IN)¥385</p>
                    </div>
                </li>
                <li class="menu_drink_list_box">
                    <img src="<?php echo get_template_directory_uri() ?>/image/VanillaLatte.png" alt="">
                    <div class="drink_name">
                        <p>バニラ・ラテ</p>
                    </div>
                    <div class="price">
                        <p>
                            【HOT / ICE】¥350
                        </p>
                    </div>
                    <div class="price_taxin">
                        <p>(TAX IN)¥385</p>
                    </div>
                </li>
            </ul>
        </div>

        <!-------------------------------フードメニュー------------------------------------>

        <div class="food_title ">
            <p>FOOD</p>
        </div>
        <div class="menu_food_cont">
            <ul class="menu_food_list">
                <li class="menu_food_list_box">
                    <img src="<?php echo get_template_directory_uri() ?>/image/ChocolateHigh.png" alt="">
                    <div class="food_name">
                        <p>チョコレートハイ</p>
                    </div>
                    <div class="price">
                        <p>¥350</p>
                    </div>
                    <div class="price_taxin">
                        <p>(TAX IN)¥385</p>
                    </div>
                </li>
                <li class="menu_food_list_box">
                    <img src="<?php echo get_template_directory_uri() ?>/image/CrazyHotChocolate.png" alt="">
                    <div class="food_name">
                        <p>クレイジーホットチョコ</p>
                    </div>
                    <div class="price">
                        <p>¥350</p>
                    </div>
                    <div class="price_taxin">
                        <p>(TAX IN)¥385</p>
                    </div>
                </li>
                <li class="menu_food_list_box">
                    <img src="<?php echo get_template_directory_uri() ?>/image/SalmonCreamcheese.png" alt="">
                    <div class="drink_name">
                        <p>サーモンクリームチーズ</p>
                    </div>
                    <div class="price">
                        <p>¥350</p>
                    </div>
                    <div class="price_taxin">
                        <p>(TAX IN)¥385</p>
                    </div>
                </li>
                <li class="menu_food_list_box">
                    <img src="<?php echo get_template_directory_uri() ?>/image/JamonSerranoEgg.png" alt="">
                    <div class="food_name">
                        <p>生ハムエッグ</p>
                    </div>
                    <div class="price">
                        <p>¥350</p>
                    </div>
                    <div class="price_taxin">
                        <p>(TAX IN)¥385</p>
                    </div>
                </li>

            </ul>
        </div>
    </div>


    
    <!-------------------------------- jquery ----------------------------------->

    <script>
        $(function() {
            $('.hamburger').click(function() {
                $(this).toggleClass('active');

                if ($(this).hasClass('active')) {
                    $('.globalMenuSp').addClass('active');
                } else {
                    $('.globalMenuSp').removeClass('active');
                }
            });
        });

        ScrollReveal().reveal('.pickup_menu', {
            duration: 1500, // アニメーションの完了にかかる時間
            viewFactor: 0.4, // 0~1,どれくらい見えたら実行するか
            reset: true // 何回もアニメーション表示するか
        });

        ScrollReveal().reveal('.menu_drink_list_box', {
            duration: 1500, // アニメーションの完了にかかる時間
            viewFactor: 0.4, // 0~1,どれくらい見えたら実行するか
            reset: true // 何回もアニメーション表示するか
        });

        ScrollReveal().reveal('.menu_food_list_box', {
            duration: 1500, // アニメーションの完了にかかる時間
            viewFactor: 0.4, // 0~1,どれくらい見えたら実行するか
            reset: true // 何回もアニメーション表示するか
        });
    </script>
<?php get_footer(); ?>