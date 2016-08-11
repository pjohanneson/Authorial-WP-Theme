<?php

echo( '<div class="' . implode( ' ', get_post_class() ) . '">' . PHP_EOL );
if( is_singular() ) {
	the_title( '<h1 class="entry-title">', '</h1>' . PHP_EOL );
	the_content();
} else {
	the_date( get_option( 'date_format' ), '<div class="authorial-post-date"><span class="dashicons dashicons-calendar-alt"></span> ', '</div> <!-- .post-date -->' . PHP_EOL );
	the_title( sprintf( '<h1 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h1>' . PHP_EOL );
	the_excerpt();
}
echo( '</div> <!-- .' . implode( ' ', get_post_class() ) . ' -->' . PHP_EOL );