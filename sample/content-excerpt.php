<!-- テンプレートファイルの表示 -->
<!-- <p class="debug-template">テンプレートファイル名<?php global $template; echo $template; ?></p> -->


<!-- ポストクラス -->
<!-- 記事一つ分の表示 -->
<div class="post">
<!-- 記事のURLと記事タイトルの表示 -->
<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
	<!-- カテゴリの表示 -->
	<p class="postcat"><?php the_category(' '); ?></p>
	
	<!-- 記事の概要の表示 -->
	<?php 	the_excerpt(); ?>
	<p class="more">
		<a href="<?php the_permalink(); ?>">続きを読む</a>
	</p>
	

	<p class="postinfo"><?php echo get_the_date( ); ?></p>
</div>