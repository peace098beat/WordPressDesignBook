<?php get_header(); ?>

<!-- パンくずリスト -->
<div id="breadcrumb">
<div itemscope itemtype="http://data-vocabulary.org/Breadcrumb">
	<a href="<?php echo home_url(); ?>" itemprop="url">
		<span itemprop="title">トップ</span>
	</a> &rsaquo; 
</div>

<div><?php $terminfo = get_term_by('slug',$term,$taxonomy); ?>
<?php echo $terminfo->name; ?></div>
</div>

<!-- コンテンツ -->
<div id="content">

<p class="title"><?php echo $terminfo->name; ?></p>

<?php query_posts('posts_per_page=5&order=DESC&' . $query_string); ?>
<?php if(have_posts()): while(have_posts()): 
the_post(); ?>
	<?php get_template_part('content'); ?>
<?php endwhile; endif; ?>

<?php get_template_part('pagenation'); ?>
</div>

<?php get_sidebar(); ?>

<?php get_footer(); ?>
