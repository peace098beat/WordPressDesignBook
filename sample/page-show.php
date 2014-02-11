<!-- テンプレートファイルの表示 -->
<p class="debug-template">テンプレートファイル名<?php global $template; echo $template; ?></p>

<!-- ヘッダー -->
<?php get_header(); ?>

<!-- コンテンツ -->
<div id="content">

	<div class="post">
	<?php the_title('<h2>' ,'</h2>'); ?>

	<!-- 特定カテゴリのみ表示 -->
	<?php
	    $posts = get_posts('numberposts=-1&category_name=art');
	    global $post;
	    if($posts): foreach($posts as $post): setup_postdata($post);?>

	    	<!-- ループの中身はcontent.phpと同じ内容 -->

		<!-- 記事のURLと記事タイトルの表示 -->
		<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
		<!-- カテゴリの表示 -->
		<p class="postcat"><?php the_category(' '); ?></p>
		<!-- アイキャッチ画像 -->
		<?php the_post_thumbnail( ); ?>
		<!-- 記事本文の表示 -->
		<?php the_content( ); ?>	
		<!-- ポストした日時の表示  -->
		<p class="postinfo"><?php echo get_the_date( ); ?></p>

	<?php endforeach; endif; ?>
	</div>

</div>

<!-- サイドバー -->
<?php get_sidebar( ); ?>

<!-- フッター -->
<?php get_footer(); ?>