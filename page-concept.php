<?php
/*
Template Name: コンセプトページ
*/
?>

<?php get_header(); ?>

<!--------------------------------コンセプトページトップ ----------------------------------->
<div class="container" id="conceptpage">

  <div class="conceptpage_title">
    <p>-Introduction-</p>
  </div>

  <div class="conceptpage_text">
    <p>「何の店？？」と聞かれると、答えを少し悩んでしまうのですが<br>
      カフェでもあり、洋服屋さんでもあり、雑貨屋さんでもあり・・・<br>
      <br>
      グラフィックデザインの学校を卒業した後<br>
      福岡・東京で長年グラフィックやアパレルデザインの仕事に携わってきました。<br>
      <br>
      仕事やプライベートで海外に行く機会も多く、素敵だな～ワクワクするな～という<br>
      空間をたくさん見てきて<br>
      ふと、自分でそんな空間を作ってみたいなと思い始めたのは約2年前。<br>
      日常だけど非日常的空間。<br>
      東京でも福岡市内でもなく、あえて地元太宰府エリアで。<br>
      <br>
      学生時代は、何もないつまらないところだ（失礼！）と思っていたけど<br>
      東京から帰省する度に、緑がたくさんで人柄も温かい地元が大好きだなと思うようになりました。<br>
      <br>
      そんな地元で、都会に行かなくても<br>
      居心地の良い、ちょっと楽しくちょっとごきげんになれる空間を共有したいと思い<br>
      完成したHALU STORE。
    </p>
  </div>

  <div class="conceptpage_image">
    <img src="<?php echo get_template_directory_uri() ?>/image/conceptpage_1.jpg" alt="">
  </div>

  <div class="conceptpage_text">
    <p>コーヒーもおやつも服飾雑貨もお花も、生活必需品ではないかもしれないけど<br>
      日々の生活や心を豊かにしてくれるエネルギーの源だと思っています。<br>
      <br>
      お店の名前は、ご近所さんの馴染みの店になれたらいいなと<br>
      単純明快に住所が由来です。<br>
      <br>
      いつでも気軽に覗きにきてください。<br>
      <br>
      2021年7月<br>
      HALU STORE 店主<br>
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