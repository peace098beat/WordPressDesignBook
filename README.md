README.md

# CHAPTER 1 基本サイトの構築
## STEP 1-6 ヘッダーとフッターの作成

 - <?php get_header(); ?>  
	ヘッダーの読み込み
 - <?php get_footer(); ?>  
	フッターの読み込み
 - <?php bloginfo('charset'); ?>  
	エンコードの種類
 - <?php bloginfo('name'); ?>  
	タイトル
 - <?php wp_title(); ?>  
	サイト名
 - <?php echo home_url(); ?>　　
	トップページへのリンク
 - <?php bloginfo('description' ); ?>　　
	サイトの説明
 - <?php bloginfo('rss2_url' ); ?>
	RSSフィードへのリンク
 - <?php bloginfo('template_url' ); ?>
	リンク先となるRSSフィードのURL

## STEP 1-7 ナビゲーションバーとヘッダー画像の追加
 - トップページ  
	home.phpで生成
 - カスタムメニュー  
	register_nav_menus(array(  
	'navigation' => 'ナビゲーションバー'  
	))
 - カスタムヘッダー  
	add_custom_image_header('', 'admin_header_style');  
	function admin_header_style(){}
 - if構文  
	if(): <- コロン':'とセミコロン';'を間違えないように。  
	endif;  
 - <?php  header_image();  ?>  
	カスタムヘッダーの画像

### STEP 1-8 記事の表示
 - <?php the_permalink(); ?>  
	パーマリンク
 - <?php the_title(); ?>  
	記事タイトル
 - ループ  
	<?php  if(have_posts()): while (have_posts()): the_post(); ?>  
		<?php get_template_part('content' ); ?>  
		カスタムテンプレートであるcontent.phpを呼び出す  
	<?php endwhile; endif; ?>  
 - 記事個別ページのURL  
	<?php the_permalink(); ?>
 - 記事タイトル  
 	<?php the_title(); ?>
 - カテゴリーの表示  
	<?php hte_category(''); ?>
 - コンテンツ本文の表示  
	<?php the_content( ); ?>
 - 投稿日時の表示  
	<?php get_the_date(); ?>

## STEP 1-8 記事の表示
14:16 - 15:11

## STEP 1-9 サイドバーの表示
15:11 - 15:37 = 26min
ウィジェットの設定
register_sidebar();
これをしてないと、ウィジェットの設定がGUIで開けなかった。

サイドバーの表示
やっとRSSを表示できるようになった！
これが、情報収集サイネーじの第一歩！

## STEP 1-10 トップページ以外のページの作成
