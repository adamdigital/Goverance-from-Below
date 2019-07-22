<?php
/*
Template Name: 40 Percent template
*/
?>
<?php get_header(); ?>

<!-- Feature
    ================================================== -->

<div class="fortypercent feature-type">
  <div class="spacer-vertical"></div>
 <div class="container"> 

  <div class="row">

    <div class="col-sm-11 col-md-9 col-lg-7">

         <?php get_sidebar ('40percentfeature'); ?>

</div>
<div class="col-xs-3 col-sm-1 col-md-3 col-lg-5"></div>
   
  </div><!--/row-->
  <div class="spacer-vertical"></div>
 </div><!--/container-->

</div><!--/row-->

  <!-- Twitter or social media icons
    ================================================== -->

     <hr>

      <div class="row">
        <div class="col-sm-5 col-xs-5"></div>
        <div class="col-sm-3 col-xs-3"><a href="https://twitter.com/GovFromBelow"><img width="26" height="22" alt="Twitter GovfromBelow" src="http://governancefrombelow.net/wp-content/uploads/2013/12/Twitter_logo_blue1.png"> @GovFromBelow</a></div>
        <div class="col-sm-5 col-xs-4"></div>
      </div>  

      <hr>

    <!-- Main content
    ================================================== -->

<div class="container">
 <div class="row">

            
   <div class="col-sm-7 col-lg-8">
     <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
             
              <p><?php the_content(); ?></p>
              <?php endwhile; else: ?>
              <?php endif; ?>
   </div>

    <div class="spacer-vertical"></div>
  
      <div class="col-sm-5 col-lg-4">
     <a href="http://www.researchgate.net/publication/266652406_Improving_Basic_Services_for_the_Bottom_Forty_Percent_Lessons_from_Ethiopia"><img src="http://governancefrombelow.net/wp-content/uploads/2015/02/Ethiopia-book.jpg" alt="Photo gallery from the field" width="260px" height="357px" class="thumbnail img-responsive"></a>
     </div>
  
      <div class="col-sm-5 col-lg-5">
        <?php
          $post_id = 117;
          $queried_post = get_post($post_id);
          $content = $queried_post->post_content;
          $content = apply_filters('the_content', $content);
          $content = str_replace(']]>', ']]&gt;', $content);
          echo $content;
         ?>
      </div>
  
  </div>

</div><!--/ row-->

<?php get_footer(); ?>