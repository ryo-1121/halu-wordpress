<?php
/*
Template Name: 免責事項
*/
?>

<?php get_header(); ?>

<!-------------------------------- 免責事項 ----------------------------------->
<div class="container">
  <div class="disclaimer">
    <p class="disclaimer_title">免責事項</p>

    <p>当ブログからのリンクやバナーなどで移動したサイトで提供される情報、サービス等について一切の責任を負いません。
      また当ブログのコンテンツ・情報について、できる限り正確な情報を提供するように努めておりますが、正確性や安全性を保証するものではありません。情報が古くなっていることもございます。
      当サイトに掲載された内容によって生じた損害等の一切の責任を負いかねますのでご了承ください。
    </p>
  </div>

  <div class="disclaimer">
    <p class="disclaimer_title">著作権について</p>

    <p>当ブログで掲載している文章や画像などにつきましては、無断転載することを禁止します。
      当ブログは著作権や肖像権の侵害を目的としたものではありません。著作権や肖像権に関して問題がございましたら、お問い合わせフォームよりご連絡ください。迅速に対応いたします。
    </p>
  </div>

  <div class="disclaimer">
    <p class="disclaimer_title">リンクについて</p>

    <p>当ブログは基本的にリンクフリーです。リンクを行う場合の許可や連絡は不要です。
      ただし、インラインフレームの使用や画像の直リンクはご遠慮ください。
    </p>
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