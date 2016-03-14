<?php get_header(); ?>

<div id="conteudo">
	<div id="artigos">

		<?php if ( have_posts() ) : ?>

			<?php /* Start the Loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>
				<?php get_template_part( 'content', get_post_format() ); ?>
			<?php endwhile; ?>

			<?php wpbootstrap_nav( 'nav-below' ); ?>

		<?php else : ?>

			<article id="post-0" class="post no-results not-found">

				<header class="entry-header">
					<h1 class="entry-title"><?php _e( 'Nenhuma publicação disponível', 'wpbootstrap' ); ?></h1>
				</header>

				<div class="entry-content">
					<p><?php printf( __( 'Deseja escrever sua primeira publicação? <a href="%s">Get started here</a>.', 'wpbootstrap' ), admin_url( 'post-new.php' ) ); ?></p>
				</div><!-- .entry-content -->

				
				<header class="entry-header">
					<h1 class="entry-title"><?php _e( 'Não encontrado', 'wpbootstrap' ); ?></h1>
				</header>


			</article><!-- #post-0 -->

		<?php endif; // end have_posts() check ?>

	</div><!-- #content -->
</div><!-- #primary -->
<!--<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

	<h1><?php the_title(); ?></h1>	
	<?php the_content(); ?>

<?php endwhile; else: ?>
	<p><?php _e('Desculpe, nenhuma notícia encontrada.'); ?></p>
<?php endif; ?>
-->
<?php get_footer(); ?>