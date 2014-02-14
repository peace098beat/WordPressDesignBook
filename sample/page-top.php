<script type="text/javascript" src="http://www.music-scene.jp/js/jquery-1.3.2.js?var=1.3"></script>
<script type="text/javascript" src="http://www.music-scene.jp/js/jquery.fullscreenr.js?var=1.3"></script>
<script type="text/javascript">  
	var FullscreenrOptions = {  
		width: 2000, //元画像の幅
		height: 1340, //元画像の高さ
		bgID: '#bg-img'
		}; 
	jQuery.fn.fullscreenr(FullscreenrOptions);
</script>
<style type="text/css">
	body {
	overflow:hidden!important; 
	height:100%;width:100%;
	}
    	#bg-img {
	position:absolute;
	z-index: -1;
	}
	#body .home .page .page-id-182 .page-template-default .logged-in{
	margin:0;
	}
</style>

<!-- ヘッダー -->
<?php get_header(); ?>

<!-- コンテンツ -->
<div id="content">

	<img id="bg-img" alt="" src="http://hikaru-sakihama.fififactory.com/common/img/top.jpg" />
	-- Design Image --
	<a href="http://fififactory.com/3rd-wp/wp/wp-content/uploads/2014/02/Hikaru-Sakihama.png">
	<img class="alignnone size-medium wp-image-194" alt="Hikaru Sakihama" src="http://fififactory.com/3rd-wp/wp/wp-content/uploads/2014/02/Hikaru-Sakihama-300x211.png" width="300" height="211" /></a>

</div>

<!-- サイドバー -->
<?php//get_sidebar( ); ?>

<!-- フッター -->
<?php get_footer(); ?>