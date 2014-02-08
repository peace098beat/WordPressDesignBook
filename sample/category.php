<!-- ヘッダー -->
<?php get_header(); ?>

<!-- コンテンツ -->
<div id="content">
<p class="title"><?php single_cat_title( ); ?></p>

	<!-- カスタムテンプレートのcontent.phpを呼び出すループ -->
	<?php if(have_posts()): while(have_posts()): the_post();?>
		<?php get_template_part('content'); ?>
	<?php endwhile; endif; ?>
	
	<!-- ページナビげージョン -->
	<?php 	get_template_part('pagenation'); ?>

</div>

<!-- サイドバー -->
<?php get_sidebar( ); ?>

<!-- フッター -->
<?php get_footer(); ?>