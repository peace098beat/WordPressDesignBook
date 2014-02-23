<!-- テンプレートファイルの表示 -->
<!-- <p class="debug-template">テンプレートファイル名<?php global $template; echo $template; ?></p> -->

<!-- ヘッダー -->
<?php get_header(); ?>

<!-- コンテンツ -->
<div id="content">

	<!-- 題名の表示 -->
	<div class="post"><?php the_title('<h2>' ,'</h2>'); ?></div>

	
	<strong>崎浜 光</strong>
	<strong>1988年2月17日</strong>
	<strong> 沖縄県那覇市出身</strong>
	10代、スケートボードで街をプッシュしてると目にとまるグラフィティ
	その出会いから夜中は街に出て描きまくった
	夜中、誰もいなくて、暗くて、ビジュアル的にはネガティブのイメージ
	しかし、凛とした緊張感のある静寂の闇に生き生きとした線が浮かび別の空間が出来上がっていく、何か激しく『生』を感じる瞬間だった
	そういった経験からか
	作品によく見られる黒は、テーマである『生』を表現するのによく用いる。
	凝縮された闇＝黒に緊張感が漂よい、それに調和するようにモチーフや線が存在する世界感を作りだしている
	<strong>Hikaru Sakihama</strong>
	<strong> Feb 17th 1988</strong>
	<strong> OKINAWA</strong>
	My home town is Naha-shi, Okinawa Japan.
	I met graffiti arts on a street, in one's teens,.
	The encounter has changed my life. I started drawing on night street with absorbing interest.
	“Night street” may make you imagine dangerous, lonely or something like negative image. But actually I feel “Life” strongly while my drawn lines creates certainly space in dark.
	From of this reason, “Black” is often used to describe “Life” in my work.
	“Deep darkness”, whch is “Black”, describe strained atmosphere. In my work, it has basic concept which lines and motif are created to match up the darkness.
	&nbsp;
	-- Design Image --
	<a style="font-size: 14px; line-height: 1.5em;" href="http://fififactory.com/3rd-wp/wp/wp-content/uploads/2014/02/Profile-Hikaru-Sakihama.png"><img class="alignnone size-medium wp-image-190" alt="Profile   Hikaru Sakihama" src="http://fififactory.com/3rd-wp/wp/wp-content/uploads/2014/02/Profile-Hikaru-Sakihama-300x248.png" width="300" height="248" /></a>

</div>

<!-- サイドバー -->
<?php get_sidebar( ); ?>

<!-- フッター -->
<?php get_footer(); ?>