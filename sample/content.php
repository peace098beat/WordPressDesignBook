
<!-- ポストクラス -->
<!-- 記事一つ分の表示? -->
<div class="post">
<!-- 記事のURLと記事タイトルの表示 -->
<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
	<!-- カテゴリの表示 -->
	<p class="postcat"><?php the_category(' '); ?></p>
	<!-- 記事本文の表示 -->
	<?php the_content( ); ?>	
	<!-- ポストした日時の表示  -->
	<p class="postinfo"><?php get_the_date( ); ?></p>
</div>