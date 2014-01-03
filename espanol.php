<?php
/*
Template Name: Espanol homepage
*/
?>
<?php get_header(); ?>

   <!-- Feature
    ================================================== -->

<div class="bgchurch feature-type">

 <div class="container"> 
<div class="spacer-vertical"></div>
  <div class="row">

    <?php get_sidebar ('DPDfeature-espanol'); ?>
   
  </div><!--/row-->
  <div class="spacer-vertical"></div>
 </div><!--/container-->

</div><!--/row-->

    <!-- Main content
    ================================================== -->

<div class="container">

      <!-- Twitter or social media icons
    ================================================== -->

     <hr>

      <div class="row">
        <div class="col-sm-5 col-xs-5"></div>
        <div class="col-sm-3 col-xs-3"><a href="https://twitter.com/GovFromBelow"><img width="26" height="22" alt="Twitter GovfromBelow" src="http://governancefrombelow.net/wp-content/uploads/2013/12/Twitter_logo_blue1.png"> @GovFromBelow</a></div>
        <div class="col-sm-5 col-xs-4"></div>
      </div>  

      <hr>

 <div class="row">
            
   <div class="col-sm-7 col-lg-7">
     <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
              
              <p><?php the_content(); ?></p>
              <?php endwhile; else: ?>
              <?php endif; ?>
   </div>
  
  <div class="col-sm-5 well"><?php get_sidebar ('espanol'); ?></div>

  </div>


</div><!--/ row-->

<?php get_footer(); ?>