<?php get_header(); ?>

<!-- コンテンツ -->
<div id="content">
<p class="title"><?php single_month_title(); ?></p>

<ul class="post">
<?php query_posts('posts_per_page=5&' . $query_string); ?>
<?php if(have_posts()): while(have_posts()): 
the_post(); ?>
	<?php get_template_part('content','title'); ?>
<?php endwhile; endif; ?>
</ul>

<?php get_template_part('pagenation'); ?>
</div>

<?php get_sidebar(); ?>

<?php get_footer(); ?>
