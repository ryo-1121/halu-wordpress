<?php
/*
Template Name: ブログアーカイブ
*/
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

  <ul class="blogarchive_list_cont">
    <li>
      <label><a href="">
          <img src="<?php echo get_template_directory_uri() ?>/image/background4.jpg" alt="">
          <h4 class="blogarchive_list_title">ブログタイトル</h4>
          <p>2021-05-30</p>
        </a></label>
    </li>
  
    <li>
      <label><a href="">
          <img src="<?php echo get_template_directory_uri() ?>/image/background4.jpg" alt="">
          <h4 class="blogarchive_list_title">ブログタイトル</h4>
          <p>2021-05-30</p>
        </a></label>
    </li>
  
    <li>
      <label><a href="">
          <img src="<?php echo get_template_directory_uri() ?>/image/background4.jpg" alt="">
          <h4 class="blogarchive_list_title">ブログタイトル</h4>
          <p>2021-05-30</p>
        </a></label>
    </li>
  
    <li>
      <label><a href="">
          <img src="<?php echo get_template_directory_uri() ?>/image/background4.jpg" alt="">
          <h4 class="blogarchive_list_title">ブログタイトル</h4>
          <p>2021-05-30</p>
        </a></label>
    </li>
  
    <li>
      <label><a href="">
          <img src="<?php echo get_template_directory_uri() ?>/image/background4.jpg" alt="">
          <h4 class="blogarchive_list_title">ブログタイトル</h4>
          <p>2021-05-30</p>
        </a></label>
    </li>
  
    <li>
      <label><a href="">
          <img src="<?php echo get_template_directory_uri() ?>/image/background4.jpg" alt="">
          <h4 class="blogarchive_list_title">ブログタイトル</h4>
          <p>2021-05-30</p>
        </a></label>
    </li>
  
    <li>
      <label><a href="">
          <img src="<?php echo get_template_directory_uri() ?>/image/background4.jpg" alt="">
          <h4 class="blogarchive_list_title">ブログタイトル</h4>
          <p>2021-05-30</p>
        </a></label>
    </li>
  
    <li>
      <label><a href="">
          <img src="<?php echo get_template_directory_uri() ?>/image/background4.jpg" alt="">
          <h4 class="blogarchive_list_title">ブログタイトル</h4>
          <p>2021-05-30</p>
        </a></label>
    </li>
  </ul>

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

  ScrollReveal().reveal('.blogarchive_list_cont', {
    duration: 1500, // アニメーションの完了にかかる時間
    viewFactor: 0.4, // 0~1,どれくらい見えたら実行するか
    reset: true // 何回もアニメーション表示するか
  });

</script>
<?php get_footer(); ?>