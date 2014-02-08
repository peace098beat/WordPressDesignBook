<?php 

// カスタムメニュー
register_nav_menus(array(
	'navigation' => 'ナビゲーションバー'
));

// カスタムヘッダー
add_custom_image_header('', 'admin_header_style');
function admin_header_style(){}

define('NO_HEADER_TEXT', true);
define('HEADER_IMAGE', '%s/header_red.jpg');
define('HEADER_IMAGE_WIDTH',900);
define('HEADER_IMAGE_HEIGHT', 228);

//ウィジェットの設定
register_sidebar();

//wordpressのバージョン情報の出力を停止
remove_action('wp_head' ,'wp_generator' );

//RSSフィードの情報を出力
// wp_head();を通してRSSフィードが表示される。
add_theme_support('automatic-feed-links' );

//jQueryの設定を出力
add_action('wp_head','myScript', 1);
function myScript(){
	wp_enqueue_script('jquery' );
}

//エディタ・スタイルシート
add_editor_style( );

//ギャラリーのスタイルシートを出力しないようにする
add_filter('use_default_gallery_style' ,'__return_false' );

//アイキャッチ画像の追加
add_theme_support('post-thumbnails' );
set_post_thumbnail_size(550, 400, true);

//概要の省略記号
function my_excerpt_more($more){
	return '...';
}
add_filter('excerpt_more', 'my_excerpt_more' );

//概要の末尾に「続きを読む」リンクを追加
function my_more_link($excerpt) {
	return $excerpt.'<a href="' .get_permalink($post->ID).'" class="more">[続きを読む] </a>' ;
}
add_filter('wp_trim_excerpt' , 'my_more_link' );

//抜粋の文字数の指定
function my_excerpt_mblength($length) {
	return 10;
}
add_filter('excerpt_mblength' ,'my_excerpt_mblength' );
?>