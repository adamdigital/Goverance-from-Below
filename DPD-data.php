<?php
/*
Template Name: DPD data
*/
?>
<?php get_header(); ?>
  
    <!-- Feature
    ================================================== -->

<div class="bgmountain feature-type">
  <div class="spacer-vertical"></div>
 <div class="container"> 

  <div class="row">

    <div class="col-xs-9 col-sm-11 col-md-9 col-lg-7">

         <?php get_sidebar ('DPDfeature'); ?>
            
  <div class="spacer-vertical"></div>
</div>
<div class="col-xs-3 col-sm-1 col-md-3 col-lg-5"></div>
   
  </div><!--/row-->
  <div class="spacer-vertical"></div>
 </div><!--/container-->

</div><!--/row-->

    <!-- Main content
    ================================================== -->

<div class="container">
 <div class="row">

   <div class="col-sm-12"><?php get_sidebar ('DPD'); ?></div>
            
   <div class="col-sm-7">
     <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
              <h2><?php the_title(); ?></h2>
              <p><?php the_content(); ?></p>
              <?php endwhile; else: ?>
              <?php endif; ?>
   </div>

    <div class="spacer-vertical"></div>
            
    <div class="col-sm-5 well pull-right"><?php get_sidebar ('DPDdata'); ?></div>

</div><!--/ row-->

<?php get_footer(); ?>