<?php
/*
Template Name: Graduates and students
*/
?>
<?php get_header(); ?>

<div class="container">

      <div class="row featurette">

<div class="col-xs-1 col-sm-1 col-md-2"></div>
        <div class="col-xs-10 col-sm-10 col-md-8">

     <h2><?php the_title(); ?></h2>
     <hr>
     <p>Alongside co-authors, my former and current PhD students are at the core of a research community striving to push out the boundaries of political economy on the fundamental causes of development and non-development, and pioneering Q2 methods for subnational analysis.</p>
    <h3>Graduated</h3>
    <hr>
  <div class="row">

    <?php query_posts('cat=10&showposts=20&orderby=title&orderby=ASC'); ?>
    <?php while (have_posts()) : the_post(); ?>
    <div class="col-sm-6 col-md-4">
    <div class="thumbnail fix-thumb">
      <?php the_post_thumbnail( array(150,160, false)); ?>
    </div>
      <div class="caption">
        <h4><?php the_title(); ?></h4>
        <p><?php the_content(); ?></p>
      </div>
      </div>
   <?php endwhile; ?>

    <?php query_posts('cat=8&showposts=20&orderby=title&orderby=ASC'); ?>
    <?php while (have_posts()) : the_post(); ?>
    <div class="col-sm-6 col-md-4">
    <div class="thumbnail fix-thumb">
      <?php the_post_thumbnail( array(150,160, false)); ?>
    </div>
      <div class="caption">
        <h4><?php the_title(); ?></h4>
        <p><?php the_content(); ?></p>
      </div>
      </div>
   <?php endwhile; ?>

       
       </div>
       <div class="row">
             
             <?php query_posts('cat=9&showposts=20'); ?>
             <hr>
            <h3>Current students</h3>
            <hr>
            <?php while (have_posts()) : the_post(); ?>
<div class="row">
            <div class="col-sm-4"><h4><?php the_title(); ?></h4></div>
            <div class="col-sm-8"><p><?php the_content(); ?></p></div>
</div>
            <?php endwhile; ?>

        </div><!-- /END THE ROW -->

        </div>
          <div class="col-xs-1 col-sm-1 col-md-4"></div>
      </div>
      <!-- /END THE FEATURETTES -->
</div>

<?php get_footer(); ?>