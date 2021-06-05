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
    $args = array(
      'numberposts'  => 1000
    );
    $my_posts = get_posts($args);

    if (!empty($my_posts)) {
      $output = '<ul class="blogarchive_list_cont">';
      foreach ($my_posts as $p) {
        $output .= '<li class="blogarchive_list_cont_list"><a href="' . get_permalink($p->ID) . '">';
        $img_id = get_post_thumbnail_id($p);
        if ($img_id) {
          $img_URL = wp_get_attachment_image_src($img_id);
          $output .= '<img src=' . $img_URL[0] . '>';
        } else {
          $output .= '<img src=' . get_template_directory_uri() . '/image/Instagram_logo.svg>';
        }
        $output .= '<h4 class="blogarchive_list_title">' . $p->post_title . '</h4>';
        $output .= '<p>' . get_the_date('', $p) . '<br>';
        $output .= '</p></a></li>';
      }
      $output .= '</ul>';
    }
    echo $output;
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