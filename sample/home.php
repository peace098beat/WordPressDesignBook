<?php get_header(); ?>

<!-- カスタムテンプレートのcontent.phpを呼び出す -->
<?php if(have_posts()): while(have_posts()): the_post();?>
	<?php get_template_part('content'); ?>
<?php endwhile; endif; ?>

<?php get_footer(); ?>