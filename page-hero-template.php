<?php 
/**

/*
  
  Template Name: Hero Template
  
*/
 
get_header(); ?>

<!-- temporary header-->
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

<!-- hero video 

<div class="hero">
<div class="header-container">
  <div class="video-container">
      <video preload="true" autoplay loop muted poster="">
          <source src="<?php echo get_template_directory_uri(); ?>/video/bz-trailer-three.mp4" type="video/mp4">
            <source src="<?php echo get_template_directory_uri(); ?>/video/.webm" type="video/webm">
          <source src="<?php echo get_template_directory_uri(); ?>/video/.ogv" type="video/ogg">
      </video>

    </div>
</div>
</div>-->
<!-- about section-->

<div class="about">
<div class="container">
  <div class="row">
    <div class="col-md-12">
      <h4 class="headline">Welcome to Brain Zapped!</h4>
    </div>
  </div>
</div>
  <div class="container">
      <div class="row">
          <div class="col-xs-12 col-sm-6 col-m-6 col-lg-6">
              <div class="">
                <div class="">
                  <p>Get Brain Zapped! We create educational, inspiring, and entertaining videos for kids, ages 6 to 99. Get zapped with info about everything from science to school life, to just  being awesome. We want to help you be the best you, you can be! </p>
                </div>
                </div>
            </div>
            <div class="col-xs-12 col-sm-6 col-m-6 col-lg-6">
              <p>Our Brain Zapped Science series is designed with educators and students in mind. Each video is crafted to address curriculum standards while infusing a fun burst of knowledge into the ol' noggin. Educators can use them to kickstart topics or just get BRAIN ZAPPED for the fun of it. </p>
            </div>
      </div>
  </div>
</div>
</div>


<!-- Latest videos -->
<div class="just-added">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
          <h3>LATEST VIDEOS</h3>
        </div>
    </div>
    </div>
    <div class="container">
      <div class="row">

    <?php query_posts('posts_per_page=3'); ?>
         <?php while ( have_posts() ) : the_post(); ?>
        <div class="col-xs-12 col-sm-4 col-md-4">
              <div class="card">
                  <div class="bw pic">
                      <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
                      <!--<span class="vlog-format-action small"><i class="fa fa-play"></i></span>-->
                    </div>
            <div class="container-card">
                        <p class="category-text"><?php the_category( ','); ?></p>
                        <h4><a href="#"><?php the_title(); ?></a></h4>
                        <p><?php echo wp_trim_words( get_the_content(), 12, '...' ); ?></p>
                    <a href="<?php the_permalink(); ?>"><button class="button">play video</button></a><br>
                    <a href="https://twitter.com/share?
                              url=brainzapped.com
                              related=twitterapi%2Ctwitter&
                                text=custom%20share%20text"><i class="fa fa-twitter" aria-hidden="true"></i>
                                </a>
                                <a href="https://www.facebook.com/video.php?v={id}">
                                <i class="fa fa-facebook" aria-hidden="true"></i>
                                </a>
            </div>
        </div>
        </div>
             <?php endwhile; ?> 
    <?php wp_reset_query(); ?>
        </div>
    </div>
</div>
<div class="more-button">
  <div class="container">
      <div class="row">
          <div class="col-md-12">
              <a href="<?php echo get_page_link(8); ?>"><button class="button-more text-center">view all videos &#8594;</button></a>
            </div>
        </div>
    </div>
</div>


<!-- most watched -->
<div class="most-watched">
  <div class="container">
        <div class="row">
          <div class="col-md-12">
              <h3>MOST WATCHED</h3>
            </div>
        </div>
  </div>
    <div class="container">
      <div class="row">
       <?php $popularpost = new WP_Query( array( 'posts_per_page' => 3, 'meta_key' => 'wpb_post_views_count', 'orderby' => 'meta_value_num', 'order' => 'DESC'  ) ); while ( $popularpost->have_posts() ) : $popularpost->the_post(); ?>
          <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="container-card-most">
              <div class="row">
                  <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                    <div class="bw pic">
                      <div class="most-watched-img">
                          <?php the_post_thumbnail(); ?>
                             
                        </div>
                    </div>
                    </div>
                
                    <div class="col-xs-6 col-sm-6 col-m-6 col-lg-6">
                      <div class="content">
                      <p class="category-text"><?php the_category(', ') ?></p>
                        <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?> </a></h3>
                        <p><em><?php the_date(); ?> | <?php the_author(); ?></em></p> 
                        <!--<p><em><?php the_author(); ?></em></p>-->
                        <p class="paragraph"><?php echo wp_trim_words( get_the_content(), 15, '...' ); ?></p>

                        <h6><a href="<?php the_permalink(); ?>">PLAY VIDEO</a></h6>

                        

                      </div>
                        
                  </div>
              </div>
              </div>
            </div>
              <?php endwhile; ?>
        </div>
      </div>
      </div>
<!-- Media query -->
<div class="most-watched-two">
<div class="container">
        <div class="row">
          <div class="col-md-12">
              <h3>MOST WATCHED</h3>
            </div>
        </div>
  </div>
  </div>
      <div class="most-watched-media">
          <div class="container">
      <div class="row">
       <?php $popularpost = new WP_Query( array( 'posts_per_page' => 3, 'meta_key' => 'wpb_post_views_count', 'orderby' => 'meta_value_num', 'order' => 'DESC'  ) ); while ( $popularpost->have_posts() ) : $popularpost->the_post(); ?>
          <div class="col-xs-12">
      
              <div class="card">
                  <div class="bw pic">
                      <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
                      <!--<span class="vlog-format-action small"><i class="fa fa-play"></i></span>-->
                    </div>
                  <div class="container-card">
                        <p class="category-text"><?php the_category( ','); ?></p>
                        <h4><a href="#"><?php the_title(); ?></a></h4>
                        <p><?php echo wp_trim_words( get_the_content(), 12, '...' ); ?></p>
                    <a href="<?php the_permalink(); ?>"><button class="button">play video</button></a><br>
                    <i class="fa fa-twitter" aria-hidden="true"></i><i class="fa fa-facebook" aria-hidden="true"></i>
                  </div>
              </div>
        </div>
      </div>    
      <?php endwhile; ?>
    </div>
  </div>



<div class="more-button">
  <div class="container">
      <div class="row">
          <div class="col-md-12">
              <a href="<?php echo get_page_link(8); ?>"><button class="button-more text-center">view all videos &#8594;</button></a>
            </div>
        </div>
    </div>
</div>


 <script>
        
        jQuery(window).load(function() {
        
      // MASSONRY Without jquery
      var container = document.querySelector('#ms-container');
      var msnry = new Masonry( container, {
        itemSelector: '.ms-item',
        columnWidth: '.ms-item',                
      });  
      
        });

 /* $('.type-it').typeIt({
    strings: ['Headline Text will go here', 'And anything else we want to add!']
  });*/

    </script>
<?php get_footer(); ?>