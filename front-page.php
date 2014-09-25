<?php
/**
 * @package WordPress
 * @subpackage Authorial
 */

    get_header();  //the Header

    get_template_part( 'menu', 'front-page' ); //the  menu + logo/site title

    get_template_part( 'loop', 'front-page' ); //the Loop

    get_template_part( 'sidebar', 'front-page' ); //the Sidebar

    get_footer(); //the Footer

?>

