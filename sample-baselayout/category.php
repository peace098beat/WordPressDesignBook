<!-- ヘッダー -->
<?php get_header(); ?>

<!-- コンテンツ -->
<div id="content">
<p class="title"><?php single_cat_title( ); ?></p>

	<?php query_posts('posts_per_page=-1&order=ASC&' . $query_string ); ?>
	<p>category.phpにて。カスタムテンプレートのcontent-excerpt.phpを呼び出すループ。	</p>
	<?php if(have_posts()): while(have_posts()): the_post();?>
		<?php get_template_part('content', 'excerpt'); ?>
	<?php endwhile; endif; ?>
	
	<!-- ページナビげージョン -->
	<?php 	get_template_part('pagenation'); ?>

</div>

<!-- サイドバー -->
<?php get_sidebar( ); ?>

<!-- フッター -->
<?php get_footer(); ?>