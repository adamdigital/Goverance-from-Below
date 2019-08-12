<?php
/*
Template Name: DPD homepage
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

 <?php get_template_part('src/components/c-breadcrumb'); ?>

   <div class="col-sm-12"><?php get_sidebar ('DPD'); ?></div>
            
   <div class="col-sm-7 col-lg-8">
     <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
              <h2><?php the_title(); ?></h2>
              <p><?php the_content(); ?></p>
              <?php endwhile; else: ?>
              <?php endif; ?>
   </div>

    <div class="spacer-vertical"></div>
  
      <div class="col-sm-5 col-lg-4">
     <a href=""><img src="http://governancefrombelow.net/wp-content/uploads/2013/12/book-cover.jpg" alt="Photo gallery from the field" width="260px" height="357px" class="thumbnail img-responsive"></a>
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