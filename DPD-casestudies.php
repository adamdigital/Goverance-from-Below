<?php
/*
Template Name: DPD casestudies
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
            
    <div class="col-sm-5 well clearfix"><?php get_sidebar ('DPDcasestudies'); ?></div>
    <div class="col-sm-5 well">
      <h3>Questionaires</h3>
      <p>Here are the questionnaires and interview guides used in all the qualitative research</p>
      <ul>
        <li><a href="http://personal.lse.ac.uk/faguetj/documents/decentralization-and-popular-democracy/case-studies/ALCALDE.pdf"><span class="glyphicon glyphicon-download"></span> Mayor, Municipal Councillor, and Oversight Committe</a></li>
        <li><a href="http://personal.lse.ac.uk/faguetj/documents/decentralization-and-popular-democracy/case-studies/ALCALDE2.pdf"><span class="glyphicon glyphicon-download"></span> Mayor and Municipal Councillor, 2nd Round</a></li>
        <li><a href="http://personal.lse.ac.uk/faguetj/documents/decentralization-and-popular-democracy/case-studies/ComVig2.pdf"><span class="glyphicon glyphicon-download"></span> Oversight Committee, 2nd Round</a></li>
        <li><a href="http://personal.lse.ac.uk/faguetj/documents/decentralization-and-popular-democracy/case-studies/GUIA.pdf"><span class="glyphicon glyphicon-download"></span> Interview Guide -- tips &amp; reminders for the interviewer</a></li>
        <li><a href="http://personal.lse.ac.uk/faguetj/documents/decentralization-and-popular-democracy/case-studies/INFOCLAV.pdf"><span class="glyphicon glyphicon-download"></span> Key Informants (e.g. business and religious leaders, NGOs)</a></li>
        <li><a href="http://personal.lse.ac.uk/documents/decentralization-and-popular-democracy/case-studies/LOCPARTY.pdf"><span class="glyphicon glyphicon-download"></span> LOCPARTY: Local Political Party Leaders</a></li>
        <li><a href="http://personal.lse.ac.uk/faguetj/documents/decentralization-and-popular-democracy/case-studies/OTB.pdf"><span class="glyphicon glyphicon-download"></span> OTB: Grass-Roots Organization</a></li>
        <li><a href="http://personal.lse.ac.uk/faguetj/documents/decentralization-and-popular-democracy/case-studies/OTB2.pdf"><span class="glyphicon glyphicon-download"></span> OTB2: Grass-Roots Organization, 2nd Round</a></li>
      </ul>
      <ul>
        <li><a href="http://personal.lse.ac.uk/faguetj/documents/decentralization-and-popular-democracy/case-studies/info-clave-2009.doc"><span class="glyphicon glyphicon-download"></span> Key Informants, 2009</a></li>
        <li><a href="http://personal.lse.ac.uk/faguetj/documents/decentralization-and-popular-democracy/case-studies/Informante%20Clave%202007.doc"><span class="glyphicon glyphicon-download"></span> Key Informants, 2007</a></li>
        <li><a href="http://personal.lse.ac.uk/faguetj/documents/decentralization-and-popular-democracy/case-studies/Informante%20Mas%20Clave%202007.doc"><span class="glyphicon glyphicon-download"></span> Key Informants, 2007, additional questions</a></li>
      </ul>
    </div>

</div><!--/ row-->

<?php get_footer(); ?>