<?php get_header(); ?>

<div class="container">

<div class="row featurette">
<div class="col-xs-1 col-sm-1 col-md-2"></div>
        <div class="col-xs-10 col-sm-10 col-md-8">
         <ol class="breadcrumb">
            <li><a href="/">Home</a></li>
            <li><a class="active" href="/research/">Related research</a></li>
          </ol>
          <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
          <h2><?php the_title(); ?></h2>
          <p><?php the_content(); ?></p>
          </div>
        <?php endwhile; else: ?>
      <p><?php _e('Sorry, this page does not exist.'); ?></p>
      <?php endif; ?>
          <div class="col-xs-1 col-sm-1 col-md-4"></div>
      </div>
      <!-- /END THE FEATURETTES -->
</div>

<?php 
get_footer();