<?php
/**
 * The template for displaying the front page.
 * 
 * @todo Sections for posts, fiction, about... (or should that be in the plugin? Probably)
 *
 * @package Authorial
 */

get_header( 'front-page' ); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'template-parts/content', 'front-page' ); ?>

			<?php endwhile; // End of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_sidebar( 'front-page' ); ?>
<?php get_footer( 'front-page' ); ?>
