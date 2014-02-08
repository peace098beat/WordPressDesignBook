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

?>