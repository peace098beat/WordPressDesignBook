<!-- ヘッダー -->
<?php get_header(); ?>

<!-- コンテンツ -->
<div id="content">
<p class="title"><?php single_month_title( ); ?></p>

	<ul class="post">
		<!-- カスタムテンプレートのcontent.phpを呼び出すループ -->
		<?php if(have_posts()): while(have_posts()): the_post();?>
			<!-- content-titile.phpの呼び出し -->
			<?php get_template_part('content', 'title'); ?>
		<?php endwhile; endif; ?>
		
		<!-- ページナビげージョン -->
		<?php 	get_template_part('pagenation'); ?>
	</ul>

</div>

<!-- サイドバー -->
<?php get_sidebar( ); ?>

<!-- フッター -->
<?php get_footer(); ?>