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

    ScrollReveal().reveal('.head_logo', {
      duration: 1500, // アニメーションの完了にかかる時間
      viewFactor: 0.3, // 0~1,どれくらい見えたら実行するか
      reset: true // 何回もアニメーション表示するか
    });

    ScrollReveal().reveal('.circle_menu', {
      duration: 1700, // アニメーションの完了にかかる時間
      distance: '350px', //動きの幅
      origin: 'bottom', //アニメーションの開始位置
      viewFactor: 0.2, // 0~1,どれくらい見えたら実行するか
      reset: true // 何回もアニメーション表示するか
    });

    ScrollReveal().reveal('.blog', {
      duration: 1500, // アニメーションの完了にかかる時間
      viewFactor: 0.3, // 0~1,どれくらい見えたら実行するか
      reset: true // 何回もアニメーション表示するか
    });

    ScrollReveal().reveal('.post_contents', {
      duration: 1500, // アニメーションの完了にかかる時間
      viewFactor: 0.3, // 0~1,どれくらい見えたら実行するか
      reset: true // 何回もアニメーション表示するか
    });

    $('.slider').slick({
      centerMode: true,
      centerPadding: '20%',
      dots: true,
      arrows: true,
      prevArrow: '<img src="img/left.png" class="slick-arrow prev">',
      nextArrow: '<img src="img/right.png" class="slick-arrow next">',
      autoplay: true,
      autoplaySpeed: 2000,
      swipeToSlide: true,
    });
  });

  jQuery(window).on('scroll', function() {
    if (jQuery('.head').height() < jQuery(this).scrollTop()) {
      jQuery('.head').addClass('change-color');
    } else {
      jQuery('.head').removeClass('change-color');
    }
  });
</script>




<?php get_footer(); ?>