<?php
/**
 * The sidebar containing the main widget area
 *
 * If no active widgets are in the sidebar, hide it completely.
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */
?>

<div class="sidebar"> 	
	<?php if ( is_sidebar_active('secondary_widget_area') ) : ?>
		<div id="secondary" class="widget-area">
			<ul class="xoxo">
				<?php dynamic_sidebar('secondary_widget_area'); ?>
			</ul>
		</div><!– #secondary .widget-area –>
	<?php endif; ?> 
</div>
