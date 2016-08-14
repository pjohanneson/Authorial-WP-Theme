<?php
/**
 * The sidebar containing the main widget area.
 *
 * @package Authorial
 */

if ( ! ( is_active_sidebar( 'footer-widgets-left' ) || is_active_sidebar( 'footer-widgets-right') ) ) {
	return;
}
?>
<?php tha_sidebars_before(); ?> 
<div id="secondary" class="widget-area" role="complementary">
	<div class="row">
	<div class="six columns">
	<?php tha_sidebar_top(); ?>
	<?php dynamic_sidebar( 'footer-widgets-left' ); ?>
	<?php tha_sidebar_bottom(); ?>
	</div> <!-- .six .column -->
	<div class="six columns">
	<?php tha_sidebar_top(); ?>
	<?php dynamic_sidebar( 'footer-widgets-right' ); ?>
	<?php tha_sidebar_bottom(); ?>
	</div> <!-- .six .column -->
	</div> <!-- .row -->
</div><!-- #secondary -->
<?php tha_sidebars_after(); ?> 
