<!-- テンプレートファイルの表示 -->
<!-- <p class="debug-template">テンプレートファイル名<?php global $template; echo $template; ?></p> -->

<!-- ヘッダー -->
<?php get_header(); ?>

<!-- コンテンツ -->
<div id="content">

	<!-- カスタムテンプレートのcontent.phpを呼び出すループ -->
	<?php if(have_posts()): while(have_posts()): the_post();?>
		<div class="post">
			<h2><?php the_title(); ?></h2>
			<?php the_content( ); ?>
		</div>
	<?php endwhile; endif; ?>
	

</div>

<!-- サイドバー -->
 <?php get_sidebar( ); ?>

<!-- フッター -->
<?php get_footer(); ?>