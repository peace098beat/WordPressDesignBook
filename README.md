README.md

# CHAPTER 1 基本サイトの構築
## STEP 1-6 ヘッダーとフッターの作成

 - <?php get_header(); ?>  
	ヘッダーの読み込み
 - <?php get_footer(); ?>  
	フッターの読み込み
 - <?php bloginfo('charset'); ?>  
	エンコードの種類
 - <?php bloginfo('name'); ?>  
	タイトル
 - <?php wp_title(); ?>  
	サイト名
 - <?php echo home_url(); ?>　　
	トップページへのリンク
 - <?php bloginfo('description' ); ?>　　
	サイトの説明
 - <?php bloginfo('rss2_url' ); ?>
	RSSフィードへのリンク
 - <?php bloginfo('template_url' ); ?>
	リンク先となるRSSフィードのURL

## STEP 1-7 ナビゲーションバーとヘッダー画像の追加
 - トップページ  
	home.phpで生成
 - カスタムメニュー  
	register_nav_menus(array(  
	'navigation' => 'ナビゲーションバー'  
	))
 - カスタムヘッダー  
	add_custom_image_header('', 'admin_header_style');  
	function admin_header_style(){}
 - if構文  
	if(): <- コロン':'とセミコロン';'を間違えないように。  
	endif;  
 - <?php  header_image();  ?>  
	カスタムヘッダーの画像

### STEP 1-8 記事の表示
 - <?php the_permalink(); ?>  
	パーマリンク
 - <?php the_title(); ?>  
	記事タイトル
 - ループ  
	<?php  if(have_posts()): while (have_posts()): the_post(); ?>  
		<?php get_template_part('content' ); ?>  
		カスタムテンプレートであるcontent.phpを呼び出す  
	<?php endwhile; endif; ?>  
 - 記事個別ページのURL  
	<?php the_permalink(); ?>
 - 記事タイトル  
 	<?php the_title(); ?>
 - カテゴリーの表示  
	<?php hte_category(''); ?>
 - コンテンツ本文の表示  
	<?php the_content( ); ?>
 - 投稿日時の表示  
	<?php get_the_date(); ?>

## STEP 1-8 記事の表示
14:16 - 15:11

## STEP 1-9 サイドバーの表示
15:11 - 15:37 = 26min
ウィジェットの設定
register_sidebar();
これをしてないと、ウィジェットの設定がGUIで開けなかった。

サイドバーの表示
やっとRSSを表示できるようになった！
これが、情報収集サイネーじの第一歩！

## STEP 1-10 トップページ以外のページの作成
15:40 - 15:53 13min

# STEP2 カスタマイズの準備
15:55 - 16:30 35min

## 2-1 プラグインを利用するための準備
## 2-2 WordPressのヴァージョン情報を出力しないようにする
## 2-3 RSSフィードの情報を出力する
## 2-4 ライブラリの設定を出力する
## 2-5 テーマエディタのソースを色分け表示する
## 2-6 ビジュアルエディタの表示と完成ページのデザインをそろえる
## 2-7 ページの種類を識別できるようにする

# STEP3 記事の個別ページのカスタマイズ
16:55 -  min
## 3-1 フリーで利用できる画像の表示
## 3-2 複数の画像を並べて一覧表示する
## 3-3 記事ごとに一枚の画像を決まった位置に表示する
## 3-4 カスタムフィールドに入力した付加情報を表示する
-18:42
つまらん。ながす。

## 3-5 関連記事を表示する
18:42 - 
プラグインの設定ができない。
プラグインのせい？新versionのせい？
保留

## 3-6 記事の個別ページのデザインをカスタマイズする
-18:52
header.phpにて、個別記事の場合はヘッダー画像を読み込まないように条件分岐.

## 3-7 1つの記事を複数ページに分割する
18:55 - 

## 3-8 画像の個別ページのデザインをカスタマイズする

#メディアを追加できない
## wp-config.phpに以下を記述
define(‘CONCATENATE_SCRIPTS’, false );
失敗。状況変わらず。メディアの追加を選択しても何も起きない。

## 新しいWordPressをインストール(3rd-wp)
メディアの追加可能。
Version: WordPress 3.8 
## 3rd-wpを3.8.1に更新
問題なし。
## sampleテーマを入れてみよう。
できるよーどうしよー。
このままいこうか。

## 3rd-wpをjetpack.2.8に更新