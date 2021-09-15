<?php
/*
Template Name: トップページ
*/
?>


<?php get_header(); ?>

<!--------------------------- slider ---------------------------------------->
<?php echo do_shortcode('[smartslider3 slider="2"]') ?> 


<!------------------------------- バックグランドﾍﾞｰｽ-------------------------------------->
<div class="main_container">

  <!-------------------------------- サークルメニュー ----------------------------------->
  <div class="circle">
    <div class="circle_menu1 text-center rounded-circle">
      <div class="circle_back">
        <label><a href="/Concept-page">
            <p>HALU STORE</p>
          </a></label>
      </div>
    </div>
    <div class="circle_menu2 text-center rounded-circle">
      <div class="circle_back">
        <label><a href="/cafe-menu">
            <p>CAFE MENU</p>
          </a></label>
      </div>
    </div>
    <div class="circle_menu3 text-center rounded-circle">
      <div class="circle_back">
        <label><a href="/fashion">
            <p>FASHION</p>
          </a></label>
      </div>
    </div>
  </div>
</div>
<!-------------------------------- インスタグラム ----------------------------------->
<div class="post_contents">
  <div class="instagram">
    <div class="instagram_title">
      <img class="instagram_logo" src="<?php echo get_template_directory_uri() ?>/image/instagram.svg" alt="">
      <img class="instagram_icon" src="<?php echo get_template_directory_uri() ?>/image/Instagram_logo.svg" alt="">
    </div>
    <div class="instagram_picture"><?php echo do_shortcode('[instagram-feed]') ?> </div>
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