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
  });

  ScrollReveal().reveal('.blogarchive_list_cont_list', {
    duration: 1500, // アニメーションの完了にかかる時間
    viewFactor: 0.4, // 0~1,どれくらい見えたら実行するか
    reset: true // 何回もアニメーション表示するか
  });
</script>
<?php get_footer(); ?>