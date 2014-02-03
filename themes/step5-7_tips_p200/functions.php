<?php

//カスタムメニュー
register_nav_menus(array(
	'navigation' => 'ナビゲーションバー'
));


//カスタムヘッダー
add_custom_image_header('','admin_header_style');
function admin_header_style() {}

define('NO_HEADER_TEXT',true);
define('HEADER_IMAGE','%s/header_red.jpg');
define('HEADER_IMAGE_WIDTH',900);
define('HEADER_IMAGE_HEIGHT',228);


//ウィジェット
register_sidebar();
register_sidebar();
register_sidebar();
register_sidebar();


//WordPressのバージョン情報の出力を停止
remove_action('wp_head','wp_generator');


//RSSフィードの情報を出力
add_theme_support('automatic-feed-links');


//jQueryの設定を出力
add_action('wp_head', 'myScript', 1);
function myScript() {
	wp_enqueue_script('jquery');
}


//エディタ・スタイルシート
add_editor_style();


//ギャラリーのスタイルシートの出力を停止
add_filter('use_default_gallery_style', '__return_false');


//アイキャッチ画像
add_theme_support('post-thumbnails');
set_post_thumbnail_size(550, 400, true);


//概要（抜粋）の省略記号
function my_excerpt_more($more) {
	return '…';
}
add_filter('excerpt_more', 'my_excerpt_more');


//投稿フォーマット
add_theme_support('post-formats', array('status'));


?>
