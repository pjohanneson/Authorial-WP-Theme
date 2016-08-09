<?php

echo( '<div class="' . implode( ' ', get_post_class() ) . '">' . PHP_EOL );
the_title( sprintf( '<h1 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h1>' . PHP_EOL );
if( is_singular() ) {
	the_content();
} else {
	the_excerpt();
}
echo( '</div> <!-- .' . implode( ' ', get_post_class() ) . ' -->' . PHP_EOL );