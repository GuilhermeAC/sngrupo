<?php
/**
 * The Template for displaying all single posts
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */

get_header(); ?>

<div id="primary" class="site-content">
	<div id="content" role="main">
		<div class="row4">
			<div class="col-xs-12 col-sm-12 col-md-8 col-lg-8">	
				<?php while ( have_posts() ) : the_post(); ?>
					<!--<?php the_title(); ?>-->
					<?php get_template_part( 'content', get_post_format() ); ?>

					<nav class="nav-single">



					<?php echo '<a href="' . apply_filters( 'the_permalink', get_permalink($post->post_parent) ) . '">Voltar a pagina anterior</a>'?>
					</nav><!-- .nav-single -->


				<?php endwhile; // end of the loop. ?>
			</div><!-- #content -->

			<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
				<?php 	get_sidebar(); ?>

			</div>
		</div>
	</div> 
	<?php get_comments(); ?>
</div><!-- #content -->
</div><!-- #primary -->

<?php get_footer(); ?>