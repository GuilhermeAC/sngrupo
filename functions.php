<?php
include 'wp_bootstrap_navwalker.php';

function scripts_do_template() {
    // Bootstrap core JavaScript
    // Se preferir utilizar a própria cópia do Bootstrap, descomente a linha a seguir e comente a próxima
    //wp_register_script('bootstrap', get_template_directory_uri().'/lib/bootstrap/3.3.5/js/bootstrap.min.js', array('jquery'));
    wp_register_script('bootstrap', 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js', array('jquery'));

    wp_enqueue_script('jquery');
    wp_enqueue_script('bootstrap');
}

add_action('wp_enqueue_scripts', 'scripts_do_template');


require_once('wp_bootstrap_navwalker.php');

function the_content( $more_link_text = null, $strip_teaser = false) {
    $content = get_the_content( $more_link_text, $strip_teaser );

    /**
     * Filter the post content.
     *
     * @since 0.71
     *
     * @param string $content Content of the current post.
     */
    $content = apply_filters( 'the_content', $content );
    $content = str_replace( ']]>', ']]&gt;', $content );
    echo $content;
}
add_theme_support( 'post-thumbnails' );

if ( ! function_exists( 'wpbootstrat_nav' ) ) :
/**
 * Displays navigation to next/previous pages when applicable.
 *
 * @since Twenty Twelve 1.0
 */
function wpbootstrap_nav( $html_id ) {
    global $wp_query;

    if ( $wp_query->max_num_pages > 1 ) : ?>
    <nav id="<?php echo esc_attr( $html_id ); ?>" class="navigation" role="navigation">
        <h3 class="assistive-text"><?php _e( 'Post navigation', 'bootstrap' ); ?></h3>
        <div class="nav-previous"><?php next_posts_link( __( '<span class="meta-nav">&larr;</span> Posts Antigos', 'wpbootstrap' ) ); ?></div>
        <div class="nav-next"><?php previous_posts_link( __( 'Posts Recentes <span class="meta-nav">&rarr;</span>', 'wpbootstrap' ) ); ?></div>
    </nav><!-- .navigation -->
<?php endif;
}
endif;

if ( ! function_exists( 'twentytwelve_content_nav' ) ) :
/**
 * Displays navigation to next/previous pages when applicable.
 *
 * @since Twenty Twelve 1.0
 */
function twentytwelve_content_nav( $html_id ) {
    global $wp_query;

    if ( $wp_query->max_num_pages > 1 ) : ?>
        <nav id="<?php echo esc_attr( $html_id ); ?>" class="navigation" role="navigation">
            <h3 class="assistive-text"><?php _e( 'Post navigation', 'twentytwelve' ); ?></h3>
            <div class="nav-previous"><?php next_posts_link( __( '<span class="meta-nav">&larr;</span> Older posts', 'twentytwelve' ) ); ?></div>
            <div class="nav-next"><?php previous_posts_link( __( 'Newer posts <span class="meta-nav">&rarr;</span>', 'twentytwelve' ) ); ?></div>
        </nav><!-- .navigation -->
    <?php endif;
}
endif;
// Changing excerpt more

function new_excerpt_more($more) {
   global $post;
   return ' <a href="'. get_permalink($post->ID) . '">Leia Mais...</a>';
}
add_filter('excerpt_more', 'new_excerpt_more');


function init_jquery() 
{ 
    wp_deregister_script( 'jquery' ); 
    wp_register_script( 'jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js');
} 
add_action('init', 'init_jquery'); 


function mytheme_setup() {

    register_nav_menus(
        array(
            'footer_nav' => __( 'Footer Menu', 'bootpress' ),
            'top_menu' => __( 'Top Menu', 'bootpress' )
            )
        );

}
add_action( 'after_setup_theme', 'mytheme_setup' );

// Registrar áreas de widgets
function theme_widgets_init() {
 // Área 1
 register_sidebar( array (
     'name' => 'Primary Widget Area',
     'id' => 'primary_widget_area',
     'before_widget' => '<li id="%1$s" class="widget-container %2$s">',
     'after_widget' => "</li>",
     'before_title' => '<h3 class="widget-title">',
     'after_title' => '</h3>',
     ) );

 // Área 2
 register_sidebar( array (
     'name' => 'Secondary Widget Area',
     'id' => 'secondary_widget_area',
     'before_widget' => '<li id="%1$s" class="widget-container %2$s">',
     'after_widget' => "</li>",
     'before_title' => '<h3 class="widget-title">',
     'after_title' => '</h3>',
     ) );
} // end theme_widgets_init

add_action( 'init', 'theme_widgets_init' );

$preset_widgets = array (
 'primary_widget_area'  => array( ),
 'secondary_widget_area'  => array( 'search','categories','meta')
 );
if ( isset( $_GET['activated'] ) ) {
 update_option( 'sidebars_widgets', $preset_widgets );
}
// update_option( 'sidebars_widgets', NULL );

// Verificar widgets nas áreas de widgets
function is_sidebar_active( $index ){
  global $wp_registered_sidebars;

  $widgetcolums = wp_get_sidebars_widgets();

  if ($widgetcolums[$index]) return true;

  return false;
} // end is_sidebar_active

/**
* wp-PageNavi style
**/
add_action( 'wp_print_styles', 'my_deregister_styles', 100 );

function my_deregister_styles() {
    wp_deregister_style( 'wp-pagenavi' );
}

?>