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
		
	<div id="thumbnail">
	<ul>
		<li><a href="http://hikaru-sakihama.fififactory.com/common/img/gallery/Hikaru-A001.jpg" data-lightbox="roadtrip"><img alt="" src="http://hikaru-sakihama.fififactory.com/common/img/gallery/S-Hikaru-A001.jpg" width="70px" /></a></li>
		<li><a href="http://hikaru-sakihama.fififactory.com/common/img/gallery/Hikaru-A002.jpg" data-lightbox="roadtrip"><img alt="" src="http://hikaru-sakihama.fififactory.com/common/img/gallery/S-Hikaru-A002.jpg" width="70px" /></a></li>
		<li><a href="http://hikaru-sakihama.fififactory.com/common/img/gallery/Hikaru-A003.jpg" data-lightbox="roadtrip"><img alt="" src="http://hikaru-sakihama.fififactory.com/common/img/gallery/S-Hikaru-A003.jpg" width="70px" /></a></li>
		<li><a href="http://hikaru-sakihama.fififactory.com/common/img/gallery/Hikaru-A004.jpg" data-lightbox="roadtrip"><img alt="" src="http://hikaru-sakihama.fififactory.com/common/img/gallery/S-Hikaru-A004.jpg" width="70px" /></a></li>
		<li><a href="http://hikaru-sakihama.fififactory.com/common/img/gallery/Hikaru-A005.jpg" data-lightbox="roadtrip"><img alt="" src="http://hikaru-sakihama.fififactory.com/common/img/gallery/S-Hikaru-A005.jpg" width="70px" /></a></li>
		<li><a href="http://hikaru-sakihama.fififactory.com/common/img/gallery/Hikaru-A006.jpg" data-lightbox="roadtrip"><img alt="" src="http://hikaru-sakihama.fififactory.com/common/img/gallery/S-Hikaru-A006.jpg" width="70px" /></a></li>
		<li><a href="http://hikaru-sakihama.fififactory.com/common/img/gallery/Hikaru-A007.jpg" data-lightbox="roadtrip"><img alt="" src="http://hikaru-sakihama.fififactory.com/common/img/gallery/S-Hikaru-A007.jpg" width="70px" /></a></li>
		<li><a href="http://hikaru-sakihama.fififactory.com/common/img/gallery/Hikaru-A008.jpg" data-lightbox="roadtrip"><img alt="" src="http://hikaru-sakihama.fififactory.com/common/img/gallery/S-Hikaru-A008.jpg" width="70px" /></a></li>
		<li><a href="http://hikaru-sakihama.fififactory.com/common/img/gallery/Hikaru-A009.jpg" data-lightbox="roadtrip"><img alt="" src="http://hikaru-sakihama.fififactory.com/common/img/gallery/S-Hikaru-A009.jpg" width="70px" /></a></li>
		<li><a href="http://hikaru-sakihama.fififactory.com/common/img/gallery/Hikaru-A010.jpg" data-lightbox="roadtrip"><img alt="" src="http://hikaru-sakihama.fififactory.com/common/img/gallery/S-Hikaru-A010.jpg" width="70px" /></a></li>
		<li><a href="http://hikaru-sakihama.fififactory.com/common/img/gallery/Hikaru-A011.jpg" data-lightbox="roadtrip"><img alt="" src="http://hikaru-sakihama.fififactory.com/common/img/gallery/S-Hikaru-A011.jpg" width="70px" /></a></li>
		<li><a href="http://hikaru-sakihama.fififactory.com/common/img/gallery/Hikaru-A012.jpg" data-lightbox="roadtrip"><img alt="" src="http://hikaru-sakihama.fififactory.com/common/img/gallery/S-Hikaru-A012.jpg" width="70px" /></a></li>
		<li><a href="http://hikaru-sakihama.fififactory.com/common/img/gallery/Hikaru-A013.jpg" data-lightbox="roadtrip"><img alt="" src="http://hikaru-sakihama.fififactory.com/common/img/gallery/S-Hikaru-A013.jpg" width="70px" /></a></li>
		<li><a href="http://hikaru-sakihama.fififactory.com/common/img/gallery/Hikaru-A014.jpg" data-lightbox="roadtrip"><img alt="" src="http://hikaru-sakihama.fififactory.com/common/img/gallery/S-Hikaru-A014.jpg" width="70px" /></a></li>
		<li><a href="http://hikaru-sakihama.fififactory.com/common/img/gallery/Hikaru-A015.jpg" data-lightbox="roadtrip"><img alt="" src="http://hikaru-sakihama.fififactory.com/common/img/gallery/S-Hikaru-A015.jpg" width="70px" /></a></li>
		<li><a href="http://hikaru-sakihama.fififactory.com/common/img/gallery/Hikaru-A016.jpg" data-lightbox="roadtrip"><img alt="" src="http://hikaru-sakihama.fififactory.com/common/img/gallery/S-Hikaru-A016.jpg" width="70px" /></a></li>
	</ul>
	</div>
	-- Design Image --
	<a href="http://fififactory.com/3rd-wp/wp/wp-content/uploads/2014/02/Gallery-Hikaru-Sakihama.png"><img class="alignnone size-medium wp-image-193" alt="Gallery   Hikaru Sakihama" src="http://fififactory.com/3rd-wp/wp/wp-content/uploads/2014/02/Gallery-Hikaru-Sakihama-300x290.png" width="300" height="290" /></a>


</div>

<!-- サイドバー -->
<?php get_sidebar( ); ?>

<!-- フッター -->
<?php get_footer(); ?>