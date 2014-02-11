# README

 - ブランチ名

	 - Dev_prototype_hikaru.branch

 - 概要

	 - WordPressDesignBookを参考にSampleのカスタムテーマを作った。  
	 これから、hikaru-sakihama.fififactory.comのレイアウト・デザインを移植する。

# 固定ページのデザインの変更
>[固定ページのデザインを変える方法](http://blog.livegoods.net/archives/%E5%9B%BA%E5%AE%9A%E3%83%9A%E3%83%BC%E3%82%B8%E3%81%AE%E3%83%87%E3%82%B6%E3%82%A4%E3%83%B3%E3%82%92%E5%A4%89%E3%81%88%E3%82%8B%E6%96%B9%E6%B3%95/)

## 各固定ページの作成
 - 固定ページ名
 	 - Top
 	 	 - welcomページ
 	 - Profile
 	 	 - 崎浜光氏の紹介
 	 - Gallery
 	 	 - 崎浜光氏の作品集
 	 - Blog
 	 	 - 崎浜光氏のブログ
 	 - Show
 	 	 - イベントなどの活動記録
 	 	 - 「未来と過去のページ」
 	 	 - 未来：次回イベントの告知
		 - 過去：ぺインターとして参加したイベントでの作品を掲載。

## 各固定ページの作成手順
 - 共通項目の作成
	 - ヘッダーの作成
	 	 - header.php
	 - フッターの作成
	 	 - footer.php
	 - サイドバーの作成
	 	 - sidebar.php  
  
 - 各固定ページテンプレートの作成			
 	- Top
 		 - page-top.php
 		 	 - 背景画像の設定
 		 	 - 参考サイトMusicSceneではbody要素をabsoluteの基準としていた。しかし、page-top.phpだと、#content要素が親要素となるため、背景の絶対位置指定ができない。
 		 	 （一度保留）
 	- Profile
 		 - page-profile.php
 		 	 - 文章の挿入

 	- Gallery
 		 - page-gallery.php
 		 	 - 画像の配置
 	- Blog
 		 - page-blog.php
 		 	 - **カテゴリー別に表示できる？？**
 	- Show
 		 - page-show.php
 		 	 - `カテゴリー別に表示できる？？`


### カテゴリー別に表示できる？？
固定ページに特定カテゴリに投稿した記事を載せれるか調査。

[WordPressの固定ページに特定カテゴリの記事一覧を書き出す - サツぽろ、ニッキ。](http://1day.sorezore.net/2011/11/24/13732/)

[【WordPress】固定ページに特定のカテゴリーのみを表示する方法 - Crazy One](http://gladdesign.net/2011/12/03/wordpress-page-category-specification/)


なにやら調べていると固定ページではphpが実行できない??
プラグインの導入が必要と書いているが。。プラグイン名はWP exec PHP。
[WordPressの固定ページで特定のカテゴリの新着一覧を表示する - CrossBridge](http://www.crossbridge.biz/show-list-at-fixed-page)


# その他Tips
<!-- テンプレートファイルの表示 -->
<p class="debug-template">テンプレートファイル名<?php global $template; echo $template; ?></p>
