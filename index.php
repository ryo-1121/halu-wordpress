<?php
/*
Template Name: トップページ
*/
?>


<?php get_header(); ?>


<!------------------------------- バックグランドﾍﾞｰｽ-------------------------------------->
<div class="main_container">

  <!-------------------------------- サークルメニュー ----------------------------------->
  <div class="circle">
    <div class="circle_menu text-center rounded-circle">
      <label><a href="/Concept-page">
          <p>HALU STORE</p>
        </a></label>
    </div>
    <div class="circle_menu text-center rounded-circle">
      <label><a href="/cafe-menu">
          <p>CAFE MENU</p>
        </a></label>
    </div>
    <div class="circle_menu text-center rounded-circle">
      <label><a href="/fashion">
          <p>FASHION</p>
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
      <div class="instagram_picture"><?php echo do_shortcode('[instagram-feed]') ?> </div>
    </div>
    <!-------------------------------- ブログ ----------------------------------->
    <div class="blog">
      <div class="blog_title">BLOG</div>
      <div class="blog_article">
        <?php
        $args = array(
          'numberposts'  => 9
        );
        $my_posts = get_posts($args);

        if (!empty($my_posts)) {
          $output = '<ul class="top_blog">';
          foreach ($my_posts as $p) {
            $output .= '<li><a href="' . get_permalink($p->ID) . '">';
            $img_id = get_post_thumbnail_id($p);
            if ($img_id) {
              $img_URL = wp_get_attachment_image_src($img_id);
              $output .= '<img src=' . $img_URL[0] . '>';
            } else {
              $output .= '<img src=' . get_template_directory_uri() . '/image/Instagram_logo.svg>';
            }
            $output .= '<p>' . get_the_date('', $p) . '<br>';
            $output .= $p->post_title;
            $output .= '</p></a></li>';
          }
          $output .= '</ul>';
        }
        echo $output;
        ?>

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
</script>




<?php get_footer(); ?>