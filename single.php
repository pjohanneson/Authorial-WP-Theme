<?php
/**
 * The template for displaying all single posts.
 *
 * @package Authorial
 */

get_header(); ?>

<div class="row">
<div class="eight columns">

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php while ( have_posts() ) : the_post(); ?>

			<?php get_template_part( 'template-parts/content', 'single' ); ?>

			<?php 
			$args = array(
				'prev_text' => '&laquo; %title',
				'next_text' => '%title &raquo;',
			);
			the_post_navigation( $args ); 
			?>

			<?php
				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;
			?>

		<?php endwhile; // End of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->

</div> <!-- .eight columns -->

<div class="four columns" -->
<?php get_sidebar(); ?>
</div> <!-- .four columns -->
</div> <!-- .row -->
<?php get_footer(); ?>
