<?php 

class Authorial_Content_Filters {

	function __construct() {
		add_action( 'the_content', array( $this, 'front_page_content' ) );
	}

	function front_page_content( $content ) {
		if( is_front_page() ) {
			$content = '<div class="row">' . PHP_EOL;

			// get fiction
			if ( class_exists( 'PJ_Story' ) ) {
				$story = PJ_Story::random_story();
				$content .= '<div class="front-page fiction six columns">' . PHP_EOL .
				'<h2>Fiction</h2>' . PHP_EOL .
				'<h3>' . $story->post_title . '</h3>' . PHP_EOL .
				'<p>' . 
				$story->post_excerpt . ' <a href="' . get_permalink( $story->ID ) . '">More &raquo;</a></p>' . 
				'<p><a href="/fiction">More fiction</a>' .
				'</p>' . 
				'</div> <!-- .front-page .fiction .six .columns -->' . PHP_EOL;
				/**
				 * @todo Add blog posts
				 */
			}

			// get About content
			$about_page = get_page_by_title( 'About Patrick' );
			if ( is_a( $about_page, 'WP_Post' ) ) {
				$content .= '<div class="front-page about six columns">' . 
				'<h2>' . $about_page->post_title . '</h2>' . PHP_EOL .
				wpautop( $about_page->post_content ) . 
				'</div> <!-- .about .six .columns -->' . PHP_EOL;
			}
			$content .= '</div> <!-- .row -->' . PHP_EOL;

		}
		return $content;
	}
}

new Authorial_Content_Filters;