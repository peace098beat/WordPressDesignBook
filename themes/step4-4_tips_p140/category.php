<?php get_header(); ?>

<!-- コンテンツ -->
<div id="content">
<p class="title"><?php single_cat_title(); ?></p>

<?php
if($category_name == 'festival') {
$mypostlist = '-1';
} else {
$mypostlist = '2';
};
?>

<?php query_posts('posts_per_page='. $mypostlist . '&' . $query_string); ?>
<?php if(have_posts()): while(have_posts()): 
the_post(); ?>
	<?php get_template_part('content','excerpt'); ?>
<?php endwhile; endif; ?>

<?php get_template_part('pagenation'); ?>
</div>

<?php get_sidebar(); ?>

<?php get_footer(); ?>
