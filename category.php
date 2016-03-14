<?php
/**
 * The template for displaying Custom Category page
 *
 * Used to display archive-type pages for posts in a category.
 *
 * @link http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */
/*
get_header(); ?>

	<section id="primary" class="site-content">
		<div id="content" role="main">

	
	<?php
	$num_cols = 4; // set the number of columns here
	if (have_posts()) : ?>
		<div id="titulo_categoria"> <h2>NOTÍCIAS - GRUPO SN</h2></div>
		<div class="row4">
		<div class="col-xs-12 col-sm-12 col-md-8 col-lg-8">
			<header class="entry-header">
				<h1 class="entry-title"><?php printf( '%s', '<span>' . single_cat_title( '', false ) . '</span>' ); ?></h1>
					
			<?php if ( category_description() ) : // Show an optional category description ?>
				<div class="archive-meta"><?php echo category_description(); ?></div>
			<?php endif; ?>
			</header><!-- .archive-header -->

		<?php
		for ( $i=1 ; $i <= $num_cols; $i++ ) :
			echo '<div id="col-'.$i.'" class="col">';
			$counter = $num_cols + 1 - $i;
			/* Start the Loop */
		/*	while (have_posts()) : the_post();
				if( $counter%$num_cols == 0 ) :

				/* Include the post format-specific template for the content. If you want to
				 * this in a child theme then include a file called called content-___.php
				 * (where ___ is the post format) and that will be used instead.
				 */
				/*	get_template_part( 'content', get_post_format() );

				endif;
				$counter++;
			endwhile;
			rewind_posts();
			echo '</div>'; //closes the column div
		endfor;
		?>

		<?php else : ?>
			<?php get_template_part( 'content', 'none' ); ?>
		<?php endif; ?>
		</div>
		</div><!-- #content -->
			<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
						<?php 	get_sidebar(); ?>
		</div>
		<?php if (function_exists('pagination_funtion')) pagination_funtion(); ?>

	</section><!-- #primary -->

</div>
</div> <!-- /ROW -->
*/
get_header(); ?>
<main>
	<div id="titulo_categoria"> <h2>NOTÍCIAS - GRUPO SN</h2></div>
	<div class="row4">
		<div class="col-xs-12 col-sm-12 col-md-8 col-lg-8">
			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
				<a href="<?php the_permalink() ?>">
					<div id="title_noticias"><h3><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h3></div>
					<div class="top_not"><span><?php the_time( 'd/m/y' ); ?></span>
						<span> • <?php the_author(); ?></span></div>
						<?php if ( has_post_thumbnail() ) : ?>
							<div id="thumb_not"><a href="<?php the_permalink(); ?>"><?php the_post_thumbnail( array( 460, 300, true ) ); ?></a></div>
						<?php endif; ?>
					</a>
					<br />
					<div class="text_not"><p><?php the_excerpt(); ?></p></div>
					<hr>
				<?php endwhile; else: ?>
				<?php _e( 'Desculpe, mas não há nenhum resultado com sua busca.' ); ?>
			<?php endif; ?>
		</div>
		<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
			<?php 	get_sidebar(); ?>
		</div>
	</div>
</div>
<!-- COM PLUGIN -->
<?php if ($wp_query->max_num_pages > 1) : ?>
	<?php if (function_exists('wp_pagenavi') ) { ?>

	<?php wp_pagenavi(); ?>

	<?php } else { ?>
	<div id="navigation-bottom">
		<div class="left"><?php next_posts_link( __( "<span class='meta-nav'>&larr;</span> Mais Antigos", 'workface' ) ); ?></div>
		<div class="right"><?php previous_posts_link( __( "Mais Recentes <span class='meta-nav'>&rarr;</span>", 'workface' ) ); ?></div>
	</div>
	<?php } ?> 
<?php endif; ?>

</div>
</main>
<?php get_footer(); ?>