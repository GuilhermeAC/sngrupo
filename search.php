<?php get_header(); ?>
			<div class="row4">
			<div class="col-xs-12 col-sm-12 col-md-8 col-lg-8">	
<div id="container">
	<div id="content">

		<?php the_post(); ?>

		<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			<div id="title_noticias"> <h1 class="entry-title"><?php the_title(); ?></h1></div>
			<div class="text_not"><div class="entry-content">
				<?php the_excerpt();?></div>
				<?php if (function_exists('pagination_funtion')) pagination_funtion(); ?>
			</div><!– .entry-content –>
		</div><!– #post-<?php the_ID(); ?> –>  

		<?php if ( get_post_custom_values('comments') ) comments_template() // Adiciona um custom field com Nome e Valor "comments" para que possa usar comentários numa página ?>  

	</div><!– #content –>
</div><!– #container –>
</div>
<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
			<?php 	get_sidebar(); ?>
		</div>
</div>
<?php get_footer(); ?>