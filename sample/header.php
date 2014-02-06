<!DOCTYPE html>
<html>
<head>
	<meta charset="<?php bloginfo (' charset '); ?>" />
	<title><?php bloginfo('name'); ?><?php wp_title(); ?>></title>
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url');?> " type="text/css" />
</head>
<body>
<!-- コンテナ -->
<div id="container">
	<!-- ヘッダ -->
	<div id="header">
		<h1><a href="<?php echo home_url(); ?>"><?php bloginfo('name'); ?></a></h1>
		<p id="desc"><?php bloginfo('description'); ?></p>

		<div id="subinfo">
			<a href="<?php bloginfo('rss2_url'); ?>">
				<img 
					src="<?php bloginfo('template_url' ); ?>/feed.png" 
					alt="RSS FEED" 
					width="28" 
					height="28" /></a>
		</div>

		<div id="nav">
			<?php wp_nav_menu(array(
			'theme_location' => 'navigation'
			)); ?>
		</div>

		<?php if(get_header_image()): ?>
		<div id="image">
		<img src="<?php header_image() ?>" alt="*" width="<?php echo HEADER_IMAGE_WIDTH; ?> " height="<?php echo HEADER_IMAGE_HEIGHT; ?>" />
		</div>
		<?php endif; ?>

</div> <!-- ヘッダ -->