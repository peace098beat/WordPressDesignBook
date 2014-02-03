<?php get_header(); ?>

<!-- パンくずリスト -->
<div id="breadcrumb">
<div itemscope itemtype="http://data-vocabulary.org/Breadcrumb">
	<a href="<?php echo home_url(); ?>" itemprop="url">
		<span itemprop="title">トップ</span>
	</a> &rsaquo; 
</div>

<?php $catid = $cat; ?>
<?php $allcats = array(); ?>
<?php 
while(!$catid==0) {
	$mycat = get_category($catid);
	$catid = $mycat->parent;
	array_push($allcats, $catid);
}
array_pop($allcats);
$allcats = array_reverse($allcats); 
?>

<?php foreach($allcats as $catid): ?>
<div itemscope itemtype="http://data-vocabulary.org/Breadcrumb">
  <a href="<?php echo get_category_link($catid); ?>" itemprop="url">
    <span itemprop="title"><?php echo get_cat_name($catid); ?></span>
  </a> &rsaquo; 
</div>
<?php endforeach; ?>


<div><?php single_cat_title(); ?></div>
</div>

<!-- コンテンツ -->
<div id="content">
<p class="title"><?php single_cat_title(); ?></p>

<?php query_posts('posts_per_page=-1&order=ASC&' . $query_string); ?>
<?php if(have_posts()): while(have_posts()): 
the_post(); ?>
	<?php get_template_part('content','excerpt'); ?>
<?php endwhile; endif; ?>

<?php get_template_part('pagenation'); ?>
</div>

<?php get_sidebar(); ?>

<?php get_footer(); ?>
