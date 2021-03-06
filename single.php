<?php
/**
* Single default page
*
* @package WordPress
* @subpackage GFB
* @since GFB 1.0
*/

get_header(); 
?>


<!-- Main content
================================================== -->

<div class="container">
 <div class="row">
 
  <div class="col-sm-12">
      <?php get_template_part('src/components/c-breadcrumb'); ?>
  </div>

  <?php 
  
  get_template_part('src/components/c-lefthand-nav');
  get_template_part('src/components/c-rich-context-box');
  
  ?>

  </div>
</div>

<?php 
get_footer();