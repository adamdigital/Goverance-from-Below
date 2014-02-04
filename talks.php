<?php
/*
Template Name: Book launches and talks
*/
?>
<?php get_header(); ?>

<div class="container marketing">

      <div class="row featurette">
<div class="col-xs-1 col-sm-1 col-md-2"></div>
        <div class="col-xs-10 col-sm-10 col-md-8">
          <ol class="breadcrumb">
            <li><h2>Jean-Paul Faguet invited lecture dates</h2></li>
          </ol>
           <br>
            <?php  query_posts('orderby=date&order=DESC&showposts=55&cat=7'); ?>
                <?php while (have_posts()) : the_post(); ?>

                <div class="row">

                  <div class="col-xs-3">
                    <h4><strong><?php the_time('F j, Y'); ?></strong></h4>
                  </div>

                  <div class="col-xs-9">

                    <div class="entry">
                    <p class="lead"><?php the_title(); ?><a href="<?php the_permalink() ?>"> full event details</a></p>
                    <p><?php the_excerpt(); ?></p><br>
                   </div>
                  </div>
                </div>
              <?php endwhile; ?> 
                  

          <div class="col-xs-1 col-sm-1 col-md-5"></div>
      </div>
      <!-- /END THE FEATURETTES -->
</div>

<?php get_footer(); ?>