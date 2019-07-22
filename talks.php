<?php
/*
Template Name: Book launches and talks
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

         <?php get_sidebar ('talks'); ?>

</div>
<div class="col-xs-3 col-sm-1 col-md-3 col-lg-5"></div>
   
  </div><!--/row-->
  <div class="spacer-vertical"></div>
 </div><!--/container-->

</div><!--/row-->


<div class="container marketing">
  
           <br>
            <?php  query_posts('orderby=date&order=DESC&showposts=55&cat=7'); ?>

            <br>

            <div class="row hidden-xs">
              <div class="col-sm-2">Date</div>
              <div class="col-sm-3">Venue/event</div>
              <div class="col-sm-2">Location</div>
              <div class="col-sm-5">Lecture title</div>
            </div>
             <hr class="featurette-divider">
            <br>

                <?php while (have_posts()) : the_post(); ?>

                <div class="row">

                  <div class="col-sm-2">
                    <h4><strong><?php the_time('F j, Y'); ?></strong></h4>
                  </div>

                   <div class="col-sm-3">
                    <h4><strong><?php echo get_post_meta($post->ID, 'Venue', true); ?></strong></h4>
                  </div>

                   <div class="col-sm-2">
                    <h4><strong><?php echo get_post_meta($post->ID, 'Country', true); ?></strong></h4>
                  </div>

                  <div class="col-sm-5">

                    <div class="entry">
                    <p class="lead"><?php the_title(); ?></p>
                    <?php 
                      $content = apply_filters('the_content', $post->post_content); 
                      echo $content;  
                      ?>
                   </div>


              </div>

              

             </div>

            
              <hr class="featurette-divider">

              <?php endwhile; ?> 
                 
      </div>

    </div>
      <!-- /END THE FEATURETTES -->
</div>

<?php get_footer(); ?>