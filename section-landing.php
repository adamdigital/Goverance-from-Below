<?php
/*
Template Name: Section landing template
*/
get_header();
?>

<div class="container">
 <div class="row">

  <div class="col-12">
      <?php get_template_part('src/components/c-breadcrumb'); ?>
  </div>

  <?php 
    get_template_part('src/components/c-lefthand-nav');
    get_template_part('src/components/c-rich-context-box');
    get_template_part('src/components/c-secondary-content-block');
  ?>

  </div>
</div>

<?php 
get_footer();