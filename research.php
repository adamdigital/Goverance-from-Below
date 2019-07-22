<?php
/*
Template Name: Research
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

         <h2>Research</h2>
            <p class="lead hidden-xs">Related research publications.</p>
            <a href="/buy-now"></a> 

  <div class="spacer-vertical"></div>
</div>
<div class="col-xs-3 col-sm-1 col-md-3 col-lg-5"></div>
   
  </div><!--/row-->
  <div class="spacer-vertical"></div>
 </div><!--/container-->

</div><!--/row-->

 <div class="container"> 

   <div class="col-sm-7">
    
    <div class="row">
<div class="spacer-vertical"></div>
          <?php query_posts('cat=3&showposts=20'); ?>
          <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
          <h4><a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a></h4>
          <p><?php the_excerpt(); ?></p>
         
           <hr class="featurette-divider">
          <?php endwhile; else: ?>
          <p><?php _e('Sorry, this page does not exist.'); ?></p>
          <?php endif; ?>
    </div>

   </div><!--/ col sm 7 (center column) -->
   
    <div class="spacer-vertical"></div>        
            
    <div class="col-sm-4 well pull-right"><h3>Awards the research used in Decentralization and Popular Democracy has received</h3>
        <ul>
          <li>LSE Historic Theses Project – selected as an LSE PhD thesis of historic significance, 2010</li>
          <li>Corporación Andina de Fomento International Research Paper Prize, 2008</li>
          <li>LSE-STICERD New Researcher Award, 2006-2008</li>
          <li>British Academy Small Research Grant, 2006-2008</li>
          <li>DFID-Crisis States Programme Research Grant, 2001-2005</li>
          <li>World Bank Research Committee Award for Participatory Planning and Decentralization in Bolivia, 1997-2001</li>
          <li>William Robson Memorial Prize for best PhD dissertation at the LSE, 2002</li>
          <li>Overseas Research Scholarship - national (UK) PhD award, 1996-98</li>
        </ul></div>

         <div class="spacer-vertical"></div>

     <div class="col-sm-4 well pull-right">
      <h3>PhD Graduates and Current Students</h3>
      <p>Alongside co-authors, my former and current PhD students are at the core of a research community striving to push out the boundaries of political economy on the fundamental causes of development and non-development, and pioneering Q2 methods for subnational analysis.</p> 
      <a href="/grads-students/" class="btn btn-default">View Graduate and student list</a>
    </div>

</div><!--/ row-->

<?php get_footer(); ?>