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
                    <!-- 繰り返し処理する内容 -->
                <?php endwhile; ?>
            <?php else : ?>
                <!-- 投稿データが取得できない場合の処理 -->
            <?php endif; ?>
            <h1 class="text-nowrap">ブログタイトル</h1>
            <p class="posted_date">投稿日:2021-05-14</p>
            <div class="article_content">
                <p>誰かに何かをプレゼントしよう、とか<br> お土産を買っていこう、とか

                    <br> そういう時って渡した相手が包みをほどいて

                    <br> それを見た時の表情とかリアクションを

                    <br> 想像したりするよね。

                    <br> ○○ちゃん、気に入ってくれるかなぁ・・・

                    <br> 絶対喜んでくれるはず・・・

                    <br> そんな日常が、とてつもなく楽しくて愛おしい。

                    <br> こんな時代に突入して、奇しくもそんな光景を


                    <br> 目にする機会が減少してるけど、

                    <br> それでも人と人とのコミュニケーションには

                    <br> こういった「モノ」が欠かせなかったりする。

                    <br> こんな時だけど敢えて、自信をもっておすすめしたいのが


                    <br> このアイシングクッキー↓

                    <br>
                    <img src="<?php echo get_template_directory_uri() ?>/image/202104_Icingcookie01_510px.jpg" alt="">

                </p>

            </div>

        </div>

        <!-------------------------------- アーカイブ ----------------------------------->

        <div class="archive">
            <h3>最近のブログ記事</h3>
            <ul class="archive_list">
                <a href="">
                    <li>新発売！HAPPY MESSEGE クッキー (5/7)</li>
                </a>
                <a href="">
                    <li>マンゴーといちごのMIXフルーツパフェ！ (5/1)</li>
                </a>
                <a href="">
                    <li>4月14日はフレンドリーデー！ (3/20)</li>
                </a>
                <a href="">
                    <li>春爛漫！今日はどれにしよう！？ (3/15)</li>
                </a>
                <a href="">
                    <li>アルバイトスタッフ募集のお知らせ (3/10)</li>
                </a>
                <a href="">
                    <li>アーモンドチョコチップホットケーキ。 (3/7)</li>
                </a>
                <a href="">
                    <li>ホワイトデーパフェ！ (2/15)</li>
                </a>
                <a href="">
                    <li>アップルシナモンのホットケーキ！ (1/25)</li>
                </a>
                <a href="">
                    <li>外の壁面＆ウィンドウのデザイン一新！ (1/22)</li>
                </a>
                <a href="">
                    <li>バレンタインデーは特別な日♡ (1/18)</li>
                </a>
            </ul>

            <div class="archive_dropdown">
                <h3>アーカイブ</h3>
                <select name="archive_select" id="">
                    <option value="1">月を選択</option>
                    <option value="2">2021年5月</option>
                    <option value="3">2021年4月</option>
                    <option value="4">2021年3月</option>
                    <option value="5">2021年2月</option>
                    <option value="6">2021年1月</option>
                </select>
            </div>
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
</body>

<?php get_footer(); ?>