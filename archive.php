<?php
/*
Template Name: Archives
*
* @package WordPress
* @subpackage GFB
* @since GFB 1.0
*/

get_header(); 
?>

<div class="container">
 <div class="row">


 <div class="col-sm-12">
      <?php get_template_part('src/components/c-breadcrumb'); ?>
 </div>

  <?php 
  get_template_part('src/components/c-rich-context-box');
  get_template_part('src/components/c-category-display');
  get_template_part('src/components/c-secondary-content-block');
  ?>
    
  </div>
</div><!-- #container -->

<?php 
get_footer();