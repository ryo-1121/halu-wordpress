<?php

//アイキャッチ画像設定
add_theme_support('post-thumbnails');

//ウィジェット
function sample_widgets()
{
  register_sidebar(array(
    'name' => '共通サイドバー', /* ←追加したいウィジェットの名前 */
    'description' => 'サイドバーウィジェット', /* ←追加したいウィジェットの概要 */
    'id' => 'sidebar',/* ←追加したいウィジェットのID */
    'before_widget' => '<div>', /* ←追加したいウィジェットを囲う開始タグ */
    'after_widget' => '</div>', /* ←追加したいウィジェットを囲う閉じタグ */
    'before_title' => '<h3>', /* ←追加したいウィジェットのタイトルを囲う開始タグ */
    'after_title' => '</h3>', /* ←追加したいウィジェットのタイトルを囲う閉じタグ */
  ));
}
add_action('widgets_init', 'sample_widgets');

// カスタム投稿タイプの追加
add_action('init', 'create_post_type');
function create_post_type()
{
  register_post_type(
    'cafe_menu', // 投稿タイプ名の定義
    array(
      'labels' => array(
        'name' => 'カフェメニュー', // 表示する投稿タイプ名
        'singular_name' => 'カフェメニュー',
        'all_items' => 'メニュー一覧',
      ),
      'public' => true,
      'menu_position' => 5,
      'menu_icon' => 'dashicons-coffee',
      'supports' => array('title', 'editor', 'thumbnail', 'custom-fields'
    ),
    )
  );

  register_taxonomy(
    'cafe_menu_taxonomy',
    'cafe_menu',
    array(
      'hierarchical' => true,
      'labels' => array( // 表示させる文字 
        'name' => 'カテゴリ',
        'singular_name' => 'カテゴリ',
        'search_items' =>  'カテゴリを検索',
        'all_items' => 'すべてのカテゴリ',
        'parent_item' => '親分類',
        'parent_item_colon' => '親分類：',
        'edit_item' => '編集',
        'update_item' => '更新',
        'add_new_item' => 'カテゴリを追加',
        'new_item_name' => '名前',
      ),
      'show_ui' => true, // 管理画面にメニューを作る
      'rewrite' => array(
        'slug' => 'cafe_menu', 'with_front' => true, 'hierarchical' => true
      )
    )
  );
}

// メニュー
function register_my_menus() { 
  register_nav_menus( array( //複数のナビゲーションメニューを登録する関数
  //'「メニューの位置」の識別子' => 'メニューの説明の文字列',
    'main-menu' => 'Main Menu',
    // 'footer-menu'  => 'Footer Menu',
  ) );
}
add_action( 'after_setup_theme', 'register_my_menus' );
add_filter( 'big_image_size_threshold', '__return_false' );