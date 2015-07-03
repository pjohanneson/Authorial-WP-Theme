<?php
/**
 * Template part for displaying single posts.
 *
 * @package Authorial
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>

		<div class="entry-meta">
			<?php authorial_posted_on(); ?>
		</div><!-- .entry-meta -->
	</header><!-- .entry-header -->

	<div class="entry-content">

		<?php
		if ( class_exists( 'PJ_Story' ) && is_singular( PJ_Story::POST_TYPE ) ) {
			// get the publication date
			$single = true;
			$pub = get_post_meta( get_the_ID(), PJ_Story::PREFIX . 'publication_group', $single );

			if( $pub && is_array( $pub ) ) {
				echo '
				<div class="story-publication-details">
					Original publication: <a href="' . $pub[ PJ_Story::PREFIX . 'publication_url']
					.'">' . $pub[ PJ_Story::PREFIX . 'publication'] . '</a>,
					' . date( get_option( 'date_format' ), $pub[ PJ_Story::PREFIX . 'publication_date'] ) . '
				</div><!-- .story-publication-details -->' . PHP_EOL;
			}
		}	
		
		?>

		<?php the_content(); ?>
		<?php
		if( class_exists( 'PJ_Story' ) && is_singular( PJ_Story::POST_TYPE ) ) {
			// get the review content
			$reviews = get_post_meta( get_the_ID(), PJ_Story::PREFIX . 'review_group' );
			if( $reviews && is_array( $reviews ) ) {
				echo( '<div class="story-reviews">' . PHP_EOL );
				echo( '<h2>Reviews</h2>' . PHP_EOL );
				foreach( $reviews as $r ) {
					echo( '<p>' );
					echo( '<q>' . $r[ PJ_Story::PREFIX . 'review' ] . '</q>' . PHP_EOL );
					echo( '&mdash;<a href="' . $r[ PJ_Story::PREFIX . 'reviewer_url' ]. '">' .
						$r[ PJ_Story::PREFIX . 'reviewer' ] .'</a>, ' .
						date( get_option( 'date_format' ), $r[ PJ_Story::PREFIX . 'review_date'] )
						);
					echo( '</p>' . PHP_EOL );
				}

				echo( '</div><!-- .story-reviews -->' . PHP_EOL );
			}
		}
		?>
		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'authorial' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<?php authorial_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->

