<?php get_header(); ?>
<div id="primary" class="site-content">
	<div id="content" role="main">
		<?php while ( have_posts() ) : the_post(); ?>
			<?php get_template_part( 'content', 'page' ); ?>
		<?php endwhile; // end of the loop. ?>
		<?php if (function_exists('pagination_funtion')) pagination_funtion(); ?>
	</div><!-- #content -->
</div><!-- #primary -->
<?php get_footer(); ?>