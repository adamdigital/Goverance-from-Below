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
            <li><a href="/book-launches-and-talks/">Book launches and talks archive</a></li>
          </ol>
            <?php  query_posts('orderby=date&order=DESC&showposts=25&cat=7'); ?>
                <?php while (have_posts()) : the_post(); ?>

                <div class="row">

                  <div class="col-xs-12">
                    <div class="entry">
                    <p class="lead"><a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a></p>
                    <h4><?php the_date(); ?></h4>
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