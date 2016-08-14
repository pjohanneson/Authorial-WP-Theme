<?php
/**
 * The template used for displaying page content in page.php
 *
 * @package Authorial
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
	</header><!-- .entry-header -->

	<?php tha_entry_before(); ?>
	<div class="entry-content">
	<?php tha_entry_top(); ?>
		<?php the_content(); ?>
		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'authorial' ),
				'after'  => '</div>',
			) );
		?>
	<?php tha_entry_bottom(); ?>
	</div><!-- .entry-content -->
	<?php tha_entry_after(); ?>

	<footer class="entry-footer">
		<?php edit_post_link( esc_html__( 'Edit', 'authorial' ), '<span class="edit-link">', '</span>' ); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->

