<?php get_header(); ?>


<!------------------------------- バックグランドﾍﾞｰｽ-------------------------------------->
<div class="main_container">

  <!-------------------------------- サークルメニュー ----------------------------------->
  <div class="circle">
    <div class="circle_menu text-center rounded-circle">
      <label><a href="#">
          <p>HALU STORE</p>
        </a></label>
    </div>
    <div class="circle_menu text-center rounded-circle">
      <label><a href="<?php echo get_template_directory_uri() ?>/page-menu.php">
          <p>cafe menu</p>
        </a></label>
    </div>
    <div class="circle_menu text-center rounded-circle">
      <label><a href="#">
          <p>fashion</p>
        </a></label>
    </div>
  </div>
  <!-------------------------------- インスタグラム ----------------------------------->
  <div class="post_contents">
    <div class="instagram">
      <div class="instagram_title">
        <img class="instagram_logo" src="<?php echo get_template_directory_uri() ?>/image/instagram.svg" alt="">
        <img class="instagram_icon" src="<?php echo get_template_directory_uri() ?>/image/Instagram_logo.svg" alt="">
      </div>
      <div class="instagram_picture"></div>
    </div>
    <!-------------------------------- ブログ ----------------------------------->
    <div class="blog">
      <div class="blog_title">BLOG</div>
      <div class="blog_article">
        <ul class="blog_article_list">
          <li class="blog_list"><img src="<?php echo get_template_directory_uri() ?>/image/background4.jpg">
            <p>2021-0505</p>
            <p>記事タイトル</p>
          </li>
          <li class="blog_list"><img src="<?php echo get_template_directory_uri() ?>/image/background4.jpg">
            <p>2021-0505</p>
            <p>記事タイトル</p>
          </li>
          <li class="blog_list"><img src="<?php echo get_template_directory_uri() ?>/image/background4.jpg">
            <p>2021-0505</p>
            <p>記事タイトル</p>
          </li>
          <li class="blog_list"><img src="<?php echo get_template_directory_uri() ?>/image/background4.jpg">
            <p>2021-0505</p>
            <p>記事タイトル</p>
          </li>
          <li class="blog_list"><img src="<?php echo get_template_directory_uri() ?>/image/background4.jpg">
            <p>2021-0505</p>
            <p>記事タイトル</p>
          </li>
          <li class="blog_list"><img src="<?php echo get_template_directory_uri() ?>/image/background4.jpg">
            <p>2021-0505</p>
            <p>記事タイトル</p>
          </li>
          <li class="blog_list"><img src="<?php echo get_template_directory_uri() ?>/image/background4.jpg">
            <p>2021-0505</p>
            <p>記事タイトル</p>
          </li>
          <li class="blog_list"><img src="<?php echo get_template_directory_uri() ?>/image/background4.jpg">
            <p>2021-0505</p>
            <p>記事タイトル</p>
          </li>
          <li class="blog_list"><img src="<?php echo get_template_directory_uri() ?>/image/background4.jpg">
            <p>2021-0505</p>
            <p>記事タイトル</p>
          </li>
        </ul>
      </div>
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
  });

  ScrollReveal().reveal('.head_logo', {
    duration: 1500, // アニメーションの完了にかかる時間
    viewFactor: 0.3, // 0~1,どれくらい見えたら実行するか
    reset: true // 何回もアニメーション表示するか
  });

  ScrollReveal().reveal('.circle_menu', {
    duration: 1700, // アニメーションの完了にかかる時間
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
</script>




<?php get_footer(); ?>