<!-- テンプレートファイルの表示 -->
<!-- <p class="debug-template">テンプレートファイル名<?php global $template; echo $template; ?></p> -->


<!-- ポストクラス -->
<!-- 記事一つ分の表示 -->
<div class="post">
<!-- 記事のURLと記事タイトルの表示 -->
<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
	<!-- カテゴリの表示 -->
	<p class="postcat"><?php the_category(' '); ?></p>

	<!-- サムネイル画像の表示 -->
	<p class="thumb">
	<?php if(has_post_thumbnail()): ?>
		<!-- アイキャッチ画像の表示 -->
		<?php the_post_thumbnail('thumbnail'); ?>
	<?php else: ?>
		<!-- アイキャッチ画像を指定していない記事内の本文添付画像をサムネイルとして表示 -->
		<?php 	
			$imgset = array(
				'post_type' =>'attachment' ,
				'post_mime_types'  =>'image' ,
				'post_parent' => $post->ID,
				'numberposts' => '1' 
			);
			$images = get_children($imgset  );
			$image  = array_shift($images) ;
		 ?>
		<?php 	 if($image): ?>
			<?php echo wp_get_attachment_image($image->ID, 'thumbnail'); ?>
		<?php 	else: ?>
			<img src="<?php bloginfo('template_url'); ?>/no_image.jpg" alt="No Image" width="150" height="150" />
		<?php endif; ?>
		
	<?php endif; ?>
	</p>
	
	<!-- 記事の概要の表示 -->
	<?php 	the_excerpt(); ?>

	<!-- 「続きを読む」 の表示 -->
	<!-- 	<p class="more">
		<a href="<?php the_permalink(); ?>">続きを読む</a>
	</p> -->
	

	<p class="postinfo"><?php echo get_the_date( ); ?></p>
</div>