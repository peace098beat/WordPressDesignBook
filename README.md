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
