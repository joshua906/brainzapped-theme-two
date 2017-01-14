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

<!-- temporary header
<div class="hero-image">
  <div class="container">
    <div class="row">
      <div class="col-md-12 text-center">
        <div class="content">
        <h1 id="demo" class="white-heading"></h1>
        <a href="<?php echo get_page_link(8); ?>"><button class="button-more text-center">videos</button></a>
        </div>
      </div>
    </div>
  </div>
</div>
-->
<!--

<div class="homepage-hero-module">
    <div class="video-container">
        <div class="filter"></div>
        <div style="overflow: hidden; width: 100%; height: 600px;">
        <video autoplay loop muted class="fillWidth">
            <source src="<?php echo get_template_directory_uri(); ?>/video/bz-trailer-three.mp4" type="video/mp4" />
            <source src="" type="video/webm" />
        </video>
        </div>
        <div class="poster hidden">
            <img src="<?php echo get_template_directory_uri(); ?>/brainzapped-theme/resources/img/new-img.jpg" alt="">
        </div>
    </div>
</div>
-->
<!--<div class="header-video">
    <img src="https://static.pexels.com/photos/199470/pexels-photo-199470.jpeg"
         class="header-video__media"
         data-video-URL="<?php echo get_template_directory_uri(); ?>/video/bz-trailer-three.mp4"
         data-teaser="video/teaser-video"
         data-video-width="560"
         data-video-height="315">
    <a href="<?php echo get_template_directory_uri(); ?>/video/bz-trailer-three.mp4" class="header-video__play-trigger" id="header-video__play-trigger">Play video</a>
    <button type="button" class="header-video__close-trigger" id="header-video__close-trigger">Close video</button>
</div>-->

<!-- hero video -->


<div class="header-container">
	<div class="video-container">
   	  <video class="video" preload="true" autoplay loop muted>
        	<source src="<?php echo get_template_directory_uri(); ?>/video/bz-trailer-three.mp4" type="video/mp4">
            <!--<source src="<?php echo get_template_directory_uri(); ?>/video/.webm" type="video/webm">
          <source src="<?php echo get_template_directory_uri(); ?>/video/.ogv" type="video/ogg">-->
      </video>

    </div>
</div>
