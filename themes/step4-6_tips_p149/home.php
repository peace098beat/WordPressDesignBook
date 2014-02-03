<?php get_header(); ?>

<!-- コンテンツ -->
<div id="content">
<p class="title">RECENT POSTS</p>

<?php if($paged == '0'): ?>

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

<?php else: ?>

<ul class="toplist">
<?php query_posts('posts_per_page=10&'. $query_string); ?>
<?php if(have_posts()): while(have_posts()): 
the_post(); ?>
	<?php get_template_part('content','title'); ?>
<?php endwhile; endif; ?>
</ul>

<?php endif; ?>

<?php get_template_part('pagenation'); ?>
</div>

<?php get_sidebar(); ?>

<?php get_footer(); ?>
