<?php
/*
Template Name: ファッション
*/
?>

<?php get_header(); ?>

<!------------------------------- メニューページヘッド-------------------------------------->
<div class="menupage_title">
    <p>Coming soon...!</p>
</div>

<!------------------------------- バックグランドﾍﾞｰｽ-------------------------------------->
<div class="main_container">

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