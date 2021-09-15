<?php
// /*
// Template Name: ブログアーカイブ
// */
?>


<?php get_header(); ?>
<!-------------------------------- blogページトップ ----------------------------------->
<div class="blogpage_title">
  <p>BLOG</p>
</div>

<!-------------------------------- バックグラウンド ----------------------------------->

<div class="main_container">

  <!-------------------------------- blogアーカイブ ----------------------------------->
  <div class="blogarchive_list">

    <?php
    $paged = get_query_var('paged') ? get_query_var('paged') : 1;
    $information = new WP_Query(array(
      'post_type' => 'post',
      'paged' => $paged,
      'post_status' => 'publish',
      'posts_per_page' => 12,
    ));
    if ($information->have_posts()) :
    ?>
      <ul class="blogarchive_list_cont">
        <!-- ループ -->
        <?php while ($information->have_posts()) : $information->the_post(); ?>
          <li class="blogarchive_list_cont_list">
            <a href="<?php the_permalink(); ?>">
              <?php if (has_post_thumbnail()) : ?>
                <img src="<?php the_post_thumbnail_url(); ?>">
              <?php else : ?>
                <img src="<?php echo get_template_directory_uri(); ?>/image/Instagram_logo.svg">
              <?php endif; ?>
              <h4 class="blogarchive_list_title"><?php the_title(); ?></h4>
              <p><?php echo get_the_date(); ?></p>
            </a>
          </li>
        <?php endwhile; ?>
      </ul>
    <?php endif; ?>
    <?php
    wp_reset_postdata();
    ?>
    <?php
    if (function_exists('wp_pagenavi')) {
      wp_pagenavi(array('query' => $information));
    }
    ?>
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