<?php
/**
 * Template part for displaying posts.
 *
 * @package Authorial
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php the_title( sprintf( '<h1 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h1>' ); ?>

		<?php if ( 'post' == get_post_type() ) : ?>
		<div class="entry-meta">
			<?php authorial_posted_on(); ?>
		</div><!-- .entry-meta -->
		<?php endif; ?>
	</header><!-- .entry-header -->

	<?php tha_entry_before(); ?>
	<div class="entry-content">
	<?php tha_entry_top(); ?>
		<?php
			/* translators: %s: Name of current post */
			the_content( sprintf(
				wp_kses( __( 'Continue reading %s <span class="meta-nav">&rarr;</span>', 'authorial' ), array( 'span' => array( 'class' => array() ) ) ),
				the_title( '<span class="screen-reader-text">"', '"</span>', false )
			) );
		?>

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
		<?php authorial_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->
