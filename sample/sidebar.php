<!-- サイドバー -->
<div id="sidebar" > 
<ul>	

<!-- status -->
<li id="status" class="widget"><h2>STATUS</h2>
<ul>
	<!-- ステータス記事の取得 -->
	<?php $myquery_status = array(
		'tax_query' => array(array(
			'taxonomy' => 'post_format',
			'field' => 'slug',
			'terms' => 'post-format-status'
		))
	); ?>

	<?php query_posts($myquery_status); ?>
	<?php if(have_posts()): while(have_posts()): the_post(); ?>
		
		<li>
			<?php echo get_the_content(); ?> 
			<span>	<?php echo get_the_date('n月j日 h:i A'); ?></span>
		</li>
	<?php endwhile; endif; ?>
</ul>
</li>

<!-- aside -->
<li id="aside" class="widget"><h2>ASIDE</h2>
<ul>
	<!-- ステータス記事の取得 -->
	<?php $myquery_status = array(
		'tax_query' => array(array(
			'taxonomy' => 'post_format',
			'field' => 'slug',
			'terms' => 'post-format-aside'
		))
	); ?>
	<?php query_posts($myquery_status); ?>
	<?php if(have_posts()): while(have_posts()): the_post(); ?>
		
		<li>
			<?php echo get_the_content(); ?> 
			<span>	<?php echo get_the_date('n月j日 h:i A'); ?></span>
		</li>
	<?php endwhile; endif; ?>
</ul>
</li>

<!-- link -->
<li id="link" class="widget"><h2>LINK</h2>
<ul>
	<!-- ステータス記事の取得 -->
	<?php $myquery_status = array(
		'tax_query' => array(array(
			'taxonomy' => 'post_format',
			'field' => 'slug',
			'terms' => 'post-format-link'
		))
	); ?>
	<?php query_posts($myquery_status); ?>
	<?php if(have_posts()): while(have_posts()): the_post(); ?>
		
		<li>
			<?php echo get_the_content(); ?> 
			<span>	<?php echo get_the_date('n月j日 h:i A'); ?></span>
		</li>
	<?php endwhile; endif; ?>
</ul>
</li>

<!-- image -->
<li id="image" class="widget"><h2>image</h2>
<ul>
	<!-- ステータス記事の取得 -->
	<?php $myquery_status = array(
		'tax_query' => array(array(
			'taxonomy' => 'post_format',
			'field' => 'slug',
			'terms' => 'post-format-image'
		))
	); ?>
	<?php query_posts($myquery_status); ?>
	<?php if(have_posts()): while(have_posts()): the_post(); ?>
		
		<li>
			<?php echo get_the_content(); ?> 
			<span>	<?php echo get_the_date('n月j日 h:i A'); ?></span>
		</li>
	<?php endwhile; endif; ?>
</ul>
</li>

<!-- quote -->
<li id="quote" class="widget"><h2>quote</h2>
<ul>
	<!-- ステータス記事の取得 -->
	<?php $myquery_status = array(
		'tax_query' => array(array(
			'taxonomy' => 'post_format',
			'field' => 'slug',
			'terms' => 'post-format-quote'
		))
	); ?>
	<?php query_posts($myquery_status); ?>
	<?php if(have_posts()): while(have_posts()): the_post(); ?>
		
		<li>
			<?php echo get_the_content(); ?> 
			<span>	<?php echo get_the_date('n月j日 h:i A'); ?></span>
		</li>
	<?php endwhile; endif; ?>
</ul>
</li>

<!-- video -->
<li id="video" class="widget"><h2>video</h2>
<ul>
	<!-- ステータス記事の取得 -->
	<?php $myquery_status = array(
		'tax_query' => array(array(
			'taxonomy' => 'post_format',
			'field' => 'slug',
			'terms' => 'post-format-video'
		))
	); ?>
	<?php query_posts($myquery_status); ?>
	<?php if(have_posts()): while(have_posts()): the_post(); ?>
		
		<li>
			<?php echo get_the_content(); ?> 
			<span>	<?php echo get_the_date('n月j日 h:i A'); ?></span>
		</li>
	<?php endwhile; endif; ?>
</ul>
</li>

<?php 	dynamic_sidebar(  ); ?>
</ul>
</div>