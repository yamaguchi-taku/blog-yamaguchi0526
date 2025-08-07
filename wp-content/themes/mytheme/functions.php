<?php

function my_theme_enqueue_style() {
    wp_enqueue_style('my-style', get_template_directory_uri() . '/top.css', array(), time());
}
add_action('wp_enqueue_scripts', 'my_theme_enqueue_style');

// テーマにサムネイル機能を追加
add_theme_support('post-thumbnails');

// 必要であれば、サムネイルのサイズを定義（オプション）
set_post_thumbnail_size(150, 150, true); // 幅150px, 高さ150px, トリミングあり

// カスタムサイズを追加したい場合（例: トップページ用など）
add_image_size('custom-thumb', 300, 200, true); // 幅300px, 高さ200px, トリミングあり
?>
