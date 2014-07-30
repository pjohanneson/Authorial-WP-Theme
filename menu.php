<?php
/**
 * @package WordPress
 * @subpackage Authorial
 */
?>
  <div class="header">
	<div class="logo">
            <a href="<?php echo home_url(); //make logo a home link?>">
            <h1><?php echo get_bloginfo('name');?></h1>
            <h5><?php echo get_bloginfo('description');?></h5>
            </a>
        </div> <!-- .logo -->

    <div class="offset-by-one omega">

    <!--  the Menu -->
    <?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>

    </div> <!-- .offset-by-one .omega -->
</div> <!--  .header -->
