<?php
/**
 * The sidebar containing the main widget area.
 *
 * @package Authorial
 */

if ( ! is_active_sidebar( 'sidebar-widgets' ) ) {
	return;
}
?>
<?php tha_sidebars_before(); ?> 
<div id="secondary" class="widget-area" role="complementary">
	<?php tha_sidebar_top(); ?>
	<?php dynamic_sidebar( 'sidebar-widgets' ); ?>
	<?php tha_sidebar_bottom(); ?>
</div><!-- #secondary -->
<?php tha_sidebars_after(); ?> 
