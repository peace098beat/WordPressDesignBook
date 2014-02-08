<?php get_header(); ?>

<!-- コンテンツ -->
<div id="content">
<p class="title">RECENT POSTS</p>

	<!-- カスタムテンプレートのcontent.phpを呼び出すループ -->
	<?php if(have_posts()): while(have_posts()): the_post();?>
		<?php get_template_part('content'); ?>
	<?php endwhile; endif; ?>
	
	<!-- ページナビげージョン -->
	<?php 	get_template_part('pagenation'); ?>

</div>

<?php get_footer(); ?>