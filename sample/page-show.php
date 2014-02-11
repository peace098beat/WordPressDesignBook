<!-- テンプレートファイルの表示 -->
<p class="debug-template">テンプレートファイル名<?php global $template; echo $template; ?></p>

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
	
	 -- Design Image --
	<a href="http://fififactory.com/3rd-wp/wp/wp-content/uploads/2014/02/Blog-Hikaru-Sakihama.png"><img class="alignnone size-medium wp-image-192" alt="Blog   Hikaru Sakihama" src="http://fififactory.com/3rd-wp/wp/wp-content/uploads/2014/02/Blog-Hikaru-Sakihama-108x300.png" width="108" height="300" /></a>

</div>

<!-- サイドバー -->
<?php get_sidebar( ); ?>

<!-- フッター -->
<?php get_footer(); ?>