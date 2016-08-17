<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package Authorial
 */

?>

	<?php tha_content_bottom(); ?>
	</div><!-- #content -->
	<?php tha_content_after(); ?>

	<?php tha_footer_before(); ?>
	<footer id="colophon" class="site-footer" role="contentinfo">
	<?php tha_footer_top(); ?>
		<div class="site-info">
			<a href="<?php echo esc_url( __( 'http://wordpress.org/', 'authorial' ) ); ?>"><?php printf( esc_html__( 'Proudly powered by %s', 'authorial' ), 'WordPress' ); ?></a>
			<span class="sep"> | </span>
			<?php printf( esc_html__( 'Theme: %1$s by %2$s.', 'authorial' ), 'Authorial', '<a href="http://patrickjohanneson.com/" rel="designer">Patrick Johanneson</a>' ); ?>
		</div><!-- .site-info -->
	<?php tha_footer_bottom(); ?>
	</footer><!-- #colophon -->
	<?php tha_footer_after(); ?>
</div><!-- #page -->

<?php tha_body_bottom(); ?>
<?php wp_footer(); ?>

</body>
</html>
