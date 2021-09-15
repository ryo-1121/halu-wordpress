<?php get_header(); ?>

<!-------------------------------- blogページトップ ----------------------------------->
<div class="blogpage_title">
  <p>BLOG</p>
</div>

<!-------------------------------- バックグラウンド ----------------------------------->

<div class="blog_main_cont">


  <!-------------------------------- blog記事 ----------------------------------->

  <div class="blog_main">
    <?php if (have_posts()) : ?>
      <?php while (have_posts()) : the_post(); ?>
        <h1 class="text-nowrap"><?php the_title(); ?></h1>
        <p class="posted_date">投稿日:<?php the_date(); ?></p>
        <?php if (has_post_thumbnail()) : ?>
          <?php the_post_thumbnail("", array("alt" => get_the_title(), "class" => "blog_thumbnail")); ?>
        <?php endif; ?>
        <div class="article_content">
          <p><?php the_content(); ?></p>
        </div>
      <?php endwhile; ?>
    <?php else : ?>
      <!-- 投稿データが取得できない場合の処理 -->
    <?php endif; ?>

  </div>

  <!-------------------------------- アーカイブ ----------------------------------->

  <div class="archive">
  <?php dynamic_sidebar('sidebar'); ?>

    <div class="adsense_short">
      <!-- <img src="<?php echo get_template_directory_uri() ?>/image/blog2.jpg" alt=""> -->
    </div>
    <div class="adsense_long">
      <!-- <img src="<?php echo get_template_directory_uri() ?>/image/BLOG1.png" alt=""> -->
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