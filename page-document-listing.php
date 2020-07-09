<?php

/**
* Template Name: Document Listing Template
*
* @package WordPress
* @subpackage GFB
* @since GFB 1.0
*/

if (!defined('ABSPATH')) {
    exit;
}

get_header();
?>

<div class="container">
 <div class="row">

  <?php
    get_template_part('src/components/c-rich-context-box');
    get_template_part('src/components/c-document-listing');
    get_template_part('src/components/c-secondary-content-block');
    ?>

  </div>
</div>

<?php
get_footer();