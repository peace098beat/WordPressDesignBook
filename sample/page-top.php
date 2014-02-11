<!-- テンプレートファイルの表示 -->
<p class="debug-template">テンプレートファイル名<?php global $template; echo $template; ?></p>

<!-- ヘッダー -->
<?php get_header(); ?>

<!-- コンテンツ -->
<div id="content">

	<!-- </style><img id="bg-img" alt="" src="http://hikaru-sakihama.fififactory.com/common/img/top.jpg" /> -->
	-- Design Image --
	<a href="http://fififactory.com/3rd-wp/wp/wp-content/uploads/2014/02/Hikaru-Sakihama.png">
	<img class="alignnone size-medium wp-image-194" alt="Hikaru Sakihama" src="http://fififactory.com/3rd-wp/wp/wp-content/uploads/2014/02/Hikaru-Sakihama-300x211.png" width="300" height="211" /></a>

</div>

<!-- サイドバー -->
<?php get_sidebar( ); ?>

<!-- フッター -->
<?php get_footer(); ?>