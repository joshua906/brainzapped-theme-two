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
?>



<!-- footer -->
<div class="footer">
	<div class="container">
    	<div class="row">
        	<div class="col-xs-12 col-sm-4 col-md-4">
            	<h3>Brain Zapped 2016</h3>
                <p><a href="<?php echo get_page_link(89); ?>">Privacy and terms of use</a></p>
                
                <h3>Contact</h3>
                <p>email: brainzappedtv@gmail.com</p>
                <p>phone: 214-284-3456</p>
            </div>
            <div class="col-xs-12 col-sm-4 col-md-4">
                <h3>Overview</h3>
                <ul>
                	<li><p><a href="<?php echo get_page_link(124);?>">Home</a></p></li>
                    <li><p><a href="<?php echo get_page_link(8); ?>">Videos</a></p></li>
                    <li><p><a href="<?php echo get_page_link(68); ?>">Products</a></p></li>
                    <li><p><a href="<?php echo get_page_link(39); ?>">Contact</a></p></li>
                </ul>
            </div>
            <div class="col-xs-12 col-sm-4 col-md-4">
                
            </div>
        </div>
    </div>
</div>

</div>
<div class="home-footer">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
         <p style=" color: #fff; font-size: 11px; padding: 12px 0px 10px 0px; text-align: center; text-transform: uppercase;">&copy; Brain Zapped 2017 // brainzappedtv@gmail.com // 214-284-3456 // Made by matthews designs  </p> 
      </div>
    </div>
  </div>
</div>


 <!--<script>
        
        jQuery(window).load(function() {
        
      // MASSONRY Without jquery
      var container = document.querySelector('#ms-container');
      var msnry = new Masonry( container, {
        itemSelector: '.ms-item',
        columnWidth: '.ms-item',                
      });  
      
        });

      
    </script>-->
<script>

  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-90418058-1', 'auto');
  ga('send', 'pageview');


</script>
 <?php wp_footer(); ?>

</body>
</html>
