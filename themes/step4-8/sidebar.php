<!-- サイドバー -->
<div id="sidebar">

<ul>

<li id="status" class="widget"><h2>STATUS</h2>
<ul>
<?php $myquery_status = array(
	'tax_query' => array(array(
		'taxonomy' => 'post_format',
		'field' => 'slug',
		'terms' => 'post-format-status'
	))
); ?>
<?php query_posts($myquery_status); ?>
<?php if(have_posts()): while(have_posts()): 
the_post(); ?>
	<li>
	<?php echo get_the_content(); ?> <span><?php echo get_the_date('n月j日 h:i A'); ?></span>
	</li>
<?php endwhile; endif; ?>
</ul>
</li>

<?php dynamic_sidebar(); ?>
</ul>

</div>
