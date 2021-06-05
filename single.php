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

    <!-- <div class="archive_dropdown">
      <h3>アーカイブ</h3>
      <select name="archive_select" id="">
        <option value="1">月を選択</option>
        <option value="2">2021年5月</option>
        <option value="3">2021年4月</option>
        <option value="4">2021年3月</option>
        <option value="5">2021年2月</option>
        <option value="6">2021年1月</option>
      </select>
    </div> -->
    <div class="adsense_short">
      <img src="<?php echo get_template_directory_uri() ?>/image/blog2.jpg" alt="">
    </div>
    <div class="adsense_long">
      <img src="<?php echo get_template_directory_uri() ?>/image/BLOG1.png" alt="">
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
</script>

<?php get_footer(); ?>