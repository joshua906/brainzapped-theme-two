<?php 
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Brainzapped
 * @since 1.0
 * @version 1.0
 */
get_header(); ?>




<div class="header-container">
	<div class="video-container">
   	  <video class="video" preload="true" autoplay loop muted>
        	<source src="<?php echo get_template_directory_uri(); ?>/video/bz-trailer-two.mp4" type="video/mp4">
      </video>
         <a href="<?php echo get_page_link(124); ?>"><button class="reel-button">Enter Site</button></a>

    </div>
</div>

<div class="home-screen-footer">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <p style=" color: purple; font-size: 11px; padding: 12px 0px 10px 0px; text-align: center; text-transform: uppercase;">&copy; Brain Zapped 2017 //  brainzappedtv@gmail.com  //  214-284-3456  //  Made by matthews designs  </p> 
      </div>
    </div>
  </div>
</div>
<?php get_footer(); ?>