<?php
/**
* Template Name: Lectures template
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
    the_title('<h2 class="m-3">', '</h2>');

    get_template_part('src/components/c-lecture-listing');
    get_template_part('src/components/c-secondary-content-block');
    ?>

    </div>
</div>

<?php
get_footer();
