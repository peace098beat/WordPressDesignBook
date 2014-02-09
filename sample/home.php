<!-- ヘッダー -->
<?php get_header(); ?>

<!-- コンテンツ -->
<div id="content">

<!-- おすすめ記事の表示 -->
<div id="pickup">
	<p class="title">PICK-UP POSTS</p>
	<?php 
	$myquery_pickup = array(
		'posts_per_page' => 2,
		'ignore_sticky_posts' => 1,
		'post__in' => get_option('sticky_posts'),
		'orderby' => 'rand'
	); ?>
	<?php query_posts($myquery_pickup); ?>
	<?php if(have_posts()): while(have_posts()): 
	the_post(); ?>
		<?php get_template_part('content','excerpt'); ?>
	<?php endwhile; endif; ?>
</div>

<!-- 記事一覧 の表示-->
<p class="title">RECENT POSTS</p>

	<!-- 先頭2件のみサムネイルと概要を表示 -->
	<?php 
	$myquery_recent01 = array(
		'posts_per_page' => 2,
		'ignore_sticky_posts' => 1,
		'tax_query'  => array(array(
			'taxonomy' => 'post_format',
			'field' => 'slug' ,
			'terms' => 'post-format-status' ,
			'operator' => 'NOT IN'  
			))

	); ?>	
	<?php query_posts($myquery_recent01); ?>
	<?php if(have_posts()): while(have_posts()): the_post();?>
		<?php get_template_part('content','excerpt'); ?>
	<?php endwhile; endif; ?>

	<ul class="toplist">
	<!-- タイトルのみの記事一覧 -->
	<!-- 始めの2件を飛ばして(offset=2)、8件表示 -->
	<?php 
	$myquery_recent02 = array(
		'posts_per_page' => 8,
		'offset' => 2,
		'ignore_sticky_posts' => 1,
		'tax_query'  => array(array(
			'taxonomy' => 'post_format',
			'field' => 'slug' ,
			'terms' => 'post-format-status' ,
			'operator' => 'NOT IN'  
			))
	); ?>	
	<?php query_posts($myquery_recent02); ?>	
	<?php query_posts('posts_per_page=8&offset=2&ignore_sticky_posts=1'); ?>
	<?php if(have_posts()): while(have_posts()): 
	the_post(); ?>
		<!-- タイトルのみ表示 -->
		<?php get_template_part('content','title'); ?>
	<?php endwhile; endif; ?>
	</ul>

	<!-- ページナビげージョン(古い記事) -->
	<?php 	get_template_part('pagenation'); ?>

</div>

<!-- サイドバー -->
<?php get_sidebar( ); ?>

<!-- フッター -->
<?php get_footer(); ?>