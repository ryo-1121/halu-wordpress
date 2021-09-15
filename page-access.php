<?php
/*
Template Name: アクセスページ
*/
?>

<?php get_header(); ?>

<!-------------------------------- アクセスページトップ ----------------------------------->
<div class="accesspage_title">
    <p>ACCESS</p>
</div>

<!-------------------------------- バックグラウンド ----------------------------------->

<div class="main_container">

    <!-------------------------------- アクセスページ店舗案内 ----------------------------------->
    <div class="accesspage_cont">
        <div class="accesspage_image col-md-7">
            <img clas="accesspage_pic" src="<?php echo get_template_directory_uri() ?>/image/access.jpg" alt="">
        </div>
        <div class="accesspage_overview col-md-5">
            <p class="number_shats">座席数16席</p>
            <p class="accesspage_street_address">福岡県筑紫野市原 166-25</p>
            <p class="accesspage_street_address">駐車場有り(店前3台・向かい側2台)</p>
            <!-- <a href="tel:090-3669-4700">
                    <p class="accesspage_phonenumber">電話番号:090-3669-4700</p>
                </a> -->
            <p class="accesspage_buisinesshours">営業時間:11:00～19:00</p>
            <img class="mapimage" src="<?php echo get_template_directory_uri() ?>/image/halumap.jpg" alt="">
        </div>
    </div>

    <!-------------------------------- レンタサイクル ----------------------------------->

    <div class="guide">
        <div class="bicycle">
            <div class="bicycle_image">
                <img src="<?php echo get_template_directory_uri() ?>/image/bicycle.png" alt="">
            </div>
            <div class="bicycle_guide">
                <p>西鉄大宰府駅にてレンタサイクルを１日５００円 でご利用できますので、大宰府観光や当店への ご来店の際にご利用ください。 お問い合わせなど、詳しくは太宰府市観光情報ページをご覧ください。<br>
                    <label><a href="http://www.city.dazaifu.lg.jp/kanko/event/faq/5001.html">http://www.city.dazaifu.lg.jp/kanko/event/faq/5001.html</a></label>
                </p>
            </div>
        </div>

        <!-------------------------------- ウーバーイーツ ----------------------------------->

        <div class="ubereats">
            <div class="ubereats_icon">
                <img src="<?php echo get_template_directory_uri() ?>/image/uber_bnn.png" alt="">
            </div>
            <ul class="ubereats_app">
                <li class="ubereats_app_txt">ご注文は<br>Uber Eatsアプリから</li>
                <li class="ubereats_app_icon"><img src="<?php echo get_template_directory_uri() ?>/image/uber_app.svg" alt=""></li>
                <li class="ubereats_qr"><img src="<?php echo get_template_directory_uri() ?>/image/uber_qr.png" alt=""></li>
                <li class="ubereats_download"><img src="<?php echo get_template_directory_uri() ?>/image/Download_on_the_App_Store_Badge_US-UK_RGB_blk_092917.svg" alt=""><img src="image/google-play-badge.png" alt=""></li>

            </ul>
        </div>
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