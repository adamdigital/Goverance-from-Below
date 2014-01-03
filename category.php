<?php get_header(); ?>
<div class="container">
<p>
Category archive
</p>
<br />
 <div class="row-fluid">

<div class="span10">
  
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
 <div class="entry">
   <h2><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
   <?php the_content(); ?>
 </div>
<?php endwhile; else: ?>
<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
<?php endif; ?>

</div> 

<div class="span2 sidebarMod">
<?php get_sidebar(right); ?>
</div>

</div>  
</div> 

<?php get_footer(); ?>