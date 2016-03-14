<?php get_header(); ?>

<div class="container2">    
    <div class="row">
        <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
            <h3><?php echo get_the_title($post = 93);?></h3>
            <?php the_post_thumbnail();?>
            <a<?php query_posts('page_id=93'); if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
            <h2><a href="<?php the_permalink(); ?>">Leia Mais</a></h2></a>
        <?php endwhile; endif; wp_reset_query(); ?>
    </div>
    <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
        <h3><?php echo get_the_title($post = 95);?></h3>
        <?php the_post_thumbnail();?>
        <a<?php query_posts('page_id=95'); if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>    
        <h2><a href="<?php the_permalink(); ?>">Leia Mais</a></h2></a>
    <?php endwhile; endif; wp_reset_query(); ?>
</div>
<div class="col-xs-12 col-sm-4 col-md-4  col-lg-4">
    <h3><?php echo get_the_title($post = 97);?></h3>
    <?php the_post_thumbnail();?>
    <a<?php query_posts('page_id=97'); if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <h2><a href="<?php the_permalink(); ?>">Leia Mais</a></h2></a>
<?php endwhile; endif; wp_reset_query(); ?>
</div>
</div>
</div>
<br>

<br>
<hr>
<div class="row2">
    <div class="first-grid">
        <?php $recent = new WP_Query("cat=4&showposts=3&order=DESC"); ?>

        <?php while($recent->have_posts()) : $recent->the_post();?>

            <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">

                <div class-"col-xs-12 col-sm-6 col-md-6 col-lg-6">
                <div id="titulo_not"><?php the_title(); ?></div> <div id="img-thumb"><?php the_post_thumbnail('thumbnail')?></div></div><div id="texto-res"><?php the_excerpt(); ?><a href="<?php the_permalink(); ?>"></a></div>
             </div>

         <?php endwhile; ?>



     </div>
 </div>
</div>
</div>


<?php get_footer(); ?>