<?php
/*
Template Name: メニュー
*/
?>

<?php get_header(); ?>

<!------------------------------- メニューページヘッド-------------------------------------->
<div class="menupage_title">
    <p>CAFE MENU</p>
</div>

<!------------------------------- バックグランドﾍﾞｰｽ-------------------------------------->
<div class="main_container">

    <!------------------------------- おすすめメニュー-------------------------------------->
    <div class="pickup_menu row">
        <div class="pickup_menu_left col-md-8">
            <h2>Pick up Menu</h2>
            <?php
            $args = array(
                'numberposts'  => 1,
                'post_type' => 'cafe_menu', // 取得する投稿タイプのスラッグ
                'tax_query'      => array(
                    array(
                        'taxonomy' => 'cafe_menu_taxonomy',  // カスタムタクソノミー名
                        'field'    => 'slug',  // タームの指定方法。term_id / slug / name のいずれかで指定
                        'terms'    => 'recommend'  // 上で指定したタクソノミーに属するタームを指定
                    )
                ),
                'meta_key' => 'order', //並び替えに利用したいカスタムフィールドのキーを指定
                'orderby' => 'meta_value',
                'order' => 'ASC' // 降順 or 昇順
            );
            $my_posts = get_posts($args);

            if (!empty($my_posts)) {
                foreach ($my_posts as $p) {
                    $img_id = get_post_thumbnail_id($p);
                    if ($img_id) {
                        $img_URL = wp_get_attachment_image_src($img_id);
                        $output .= '<img class="pickup_menu_left_pic" src=' . $img_URL[0] . '>';
                    } else {
                        $output .= '<img class="pickup_menu_left_pic" src=' . get_template_directory_uri() . '/image/Instagram_logo.svg>';
                    }
                    // 商品名
                    // $output .= '<div class="food_name"><p>' . $p->post_title . '</p>';
                    // 料金
                    // $output .= '<div class="price"><p>¥ ' . $p->fee . '</p>';
                }
            }
            echo $output;
            ?>
        </div>
        <div class="pickup_menu_right col-md-4">
            <?php
            $args = array(
                'numberposts'  => 1,
                'post_type' => 'cafe_menu', // 取得する投稿タイプのスラッグ
                'tax_query'      => array(
                    array(
                        'taxonomy' => 'cafe_menu_taxonomy',  // カスタムタクソノミー名
                        'field'    => 'slug',  // タームの指定方法。term_id / slug / name のいずれかで指定
                        'terms'    => 'recommend'  // 上で指定したタクソノミーに属するタームを指定
                    )
                ),
                'meta_key' => 'order', //並び替えに利用したいカスタムフィールドのキーを指定
                'orderby' => 'meta_value',
                'order' => 'ASC' // 降順 or 昇順
            );
            $my_posts = get_posts($args);

            if (!empty($my_posts)) {
                foreach ($my_posts as $p) {
                    $output = '<p>' . $p->post_content . '</p>';
                }
            }
            echo $output;
            ?>
        </div>
    </div>
</div>

<!-------------------------------メニューバックグランド-------------------------------------->

<div class="menu_container ">

    <!-------------------------------ドリンクメニュー------------------------------------>

    <div class="drink_title ">
        <p>DRINK</p>
    </div>
    <div class="menu_drink_cont">
        <?php
        $args = array(
            'numberposts'  => 100,
            'post_type' => 'cafe_menu', // 取得する投稿タイプのスラッグ
            'tax_query'      => array(
                array(
                    'taxonomy' => 'cafe_menu_taxonomy',  // カスタムタクソノミー名
                    'field'    => 'slug',  // タームの指定方法。term_id / slug / name のいずれかで指定
                    'terms'    => 'drink'  // 上で指定したタクソノミーに属するタームを指定
                )
            ),
            'meta_key' => 'order', //並び替えに利用したいカスタムフィールドのキーを指定
            'orderby' => 'meta_value',
            'order' => 'ASC' // 降順 or 昇順
        );
        $my_posts = get_posts($args);

        if (!empty($my_posts)) {
            $output = '<ul class="menu_drink_list">';
            foreach ($my_posts as $p) {
                $output .= '<li class="menu_drink_list_box">';
                $img_id = get_post_thumbnail_id($p);
                if ($img_id) {
                    $img_URL = wp_get_attachment_image_src($img_id);
                    $output .= '<img src=' . $img_URL[0] . '>';
                } else {
                    $output .= '<img src=' . get_template_directory_uri() . '/image/Instagram_logo.svg>';
                }
                $output .= '<div class="drink_name"><p>' . $p->post_title . '</p>';
                $output .= '<div class="price"><p>¥ ' . $p->fee . '</p>';
                $output .= '</p></li>';
            }
            $output .= '</ul>';
        }
        echo $output;
        ?>
    </div>

    <!-------------------------------フードメニュー------------------------------------>

    <div class="food_title ">
        <p>FOOD</p>
    </div>
    <div class="menu_food_cont">
        <?php
        $args = array(
            'numberposts'  => 100,
            'post_type' => 'cafe_menu', // 取得する投稿タイプのスラッグ
            'tax_query'      => array(
                array(
                    'taxonomy' => 'cafe_menu_taxonomy',  // カスタムタクソノミー名
                    'field'    => 'slug',  // タームの指定方法。term_id / slug / name のいずれかで指定
                    'terms'    => 'food'  // 上で指定したタクソノミーに属するタームを指定
                )
            ),
            'meta_key' => 'order', //並び替えに利用したいカスタムフィールドのキーを指定
            'orderby' => 'meta_value',
            'order' => 'ASC' // 降順 or 昇順
        );
        $my_posts = get_posts($args);

        if (!empty($my_posts)) {
            $output = '<ul class="menu_food_list">';
            foreach ($my_posts as $p) {
                $output .= '<li class="menu_food_list_box">';
                $img_id = get_post_thumbnail_id($p);
                if ($img_id) {
                    $img_URL = wp_get_attachment_image_src($img_id);
                    $output .= '<img src=' . $img_URL[0] . '>';
                } else {
                    $output .= '<img src=' . get_template_directory_uri() . '/image/Instagram_logo.svg>';
                }
                $output .= '<div class="food_name"><p>' . $p->post_title . '</p>';
                $output .= '<div class="price"><p>¥ ' . $p->fee . '</p>';
                $output .= '</p></li>';
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

    ScrollReveal().reveal('.pickup_menu', {
        duration: 3000, // アニメーションの完了にかかる時間
        viewFactor: 0.2, // 0~1,どれくらい見えたら実行するか
        reset: true // 何回もアニメーション表示するか
    });

    ScrollReveal().reveal('.menu_drink_list_box', {
        duration: 5000, // アニメーションの完了にかかる時間
        viewFactor: 0.2, // 0~1,どれくらい見えたら実行するか
        reset: true // 何回もアニメーション表示するか
    });

    ScrollReveal().reveal('.menu_food_list_box', {
        duration: 5000, // アニメーションの完了にかかる時間
        viewFactor: 0.2, // 0~1,どれくらい見えたら実行するか
        reset: true // 何回もアニメーション表示するか
    });
</script>
<?php get_footer(); ?>