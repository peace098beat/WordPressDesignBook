<!-- ヘッダー -->
<?php get_header(); ?>

<!-- コンテンツ -->
<div id="content">

	<!-- カスタムテンプレートのcontent.phpを呼び出すループ -->
	<?php if(have_posts()): while(have_posts()): the_post();?>
		<?php get_template_part('content', 'single'); ?>

	<p class="pagenation">
		<span class="oldpage"><?php previous_post_link(); ?></span>
		<span class="newpage"><?php next_post_link(); ?></span>
	</p>

	<?php endwhile; endif; ?>
</div>

<!-- サイドバー -->
<?php get_sidebar( ); ?>

<!-- フッター -->
<?php get_footer(); ?>