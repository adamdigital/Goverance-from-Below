<?php
/*
Template Name: DPD praise
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
            
    <div class="col-sm-5 well pull-right"><h3>Awards the research used in Decentralization and Popular Democracy has received</h3>
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

</div><!--/ row-->

<?php get_footer(); ?>