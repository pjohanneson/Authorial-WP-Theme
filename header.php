<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package Authorial
 */

tha_html_before();
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php 
	if( is_singular() || is_front_page() ) {
		$id = get_the_ID();
		if( has_post_thumbnail( $id ) ) {
			echo( "<div class='featured-image-$id featured-image'>" . PHP_EOL );
			the_post_thumbnail( 'authorial-header' );
			echo( "</div> <!-- .featured-image-$id .featured-image -->" . PHP_EOL );
		}
	}

?>
<?php tha_body_top(); ?>
<div id="page" class="hfeed site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'authorial' ); ?></a>

	<?php tha_header_before(); ?>
	<header id="masthead" class="site-header" role="banner">
	<?php tha_header_top(); ?>
	<div class="row">
		<div class="six columns">
			<div class="site-branding">
				<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
				<!-- <p class="site-description"><?php bloginfo( 'description' ); ?></p> -->
			</div><!-- .site-branding -->
		</div><!-- .six columns -->

		<div class="six columns">
			<nav id="site-navigation" class="main-navigation" role="navigation">
				<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'authorial' ); ?></button>
				<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
			</nav><!-- #site-navigation -->
		</div><!-- .six columns -->
	</div><!-- .row -->
	<?php tha_header_bottom(); ?>
	</header><!-- #masthead -->
	<?php tha_header_after(); ?>

	<?php tha_content_before(); ?>
	<div id="content" class="container">
	<?php tha_content_top(); ?>
