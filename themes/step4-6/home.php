<?php get_header(); ?>

<!-- コンテンツ -->
<div id="content">
<p class="title">RECENT POSTS</p>

<?php query_posts('posts_per_page=2'); ?>
<?php if(have_posts()): while(have_posts()): 
the_post(); ?>
	<?php get_template_part('content','excerpt'); ?>
<?php endwhile; endif; ?>

<ul class="toplist">
<?php query_posts('posts_per_page=8&offset=2'); ?>
<?php if(have_posts()): while(have_posts()): 
the_post(); ?>
	<?php get_template_part('content','title'); ?>
<?php endwhile; endif; ?>
</ul>

</div>

<?php get_sidebar(); ?>

<?php get_footer(); ?>
