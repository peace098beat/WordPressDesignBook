<?php get_header(); ?>

<!-- パンくずリスト -->
<div id="breadcrumb">
<div itemscope itemtype="http://data-vocabulary.org/Breadcrumb">
	<a href="<?php echo home_url(); ?>" itemprop="url">
		<span itemprop="title">トップ</span>
	</a> &rsaquo; 
</div>

<div><?php $myposttype = get_post_type_object($post_type); ?>
<?php echo $myposttype->label; ?></div>
</div>

<!-- コンテンツ -->
<div id="content">
<p class="title"><?php echo $myposttype->label; ?></p>

<?php $myset = array(
	'post_type' => array('news', 'post'),
	'ignore_sticky_posts' => 1
); ?>
<?php query_posts($myset); ?>
<?php if(have_posts()): while(have_posts()): 
the_post(); ?>
	<?php get_template_part('content'); ?>
<?php endwhile; endif; ?>

<?php get_template_part('pagenation'); ?>
</div>

<?php get_sidebar(); ?>

<?php get_footer(); ?>
