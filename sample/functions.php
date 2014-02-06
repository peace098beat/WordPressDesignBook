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

?>