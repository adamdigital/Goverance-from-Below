<?php
$post = $wp_query->post;
if ( in_category('5') ) {
include(TEMPLATEPATH . '/single-dpdchapters.php');
}
elseif ( in_category('6') ) 
{
include(TEMPLATEPATH . '/single-dpdcasestudies.php');
}
elseif ( in_category('7') ) 
{
include(TEMPLATEPATH . '/single-booklaunch.php');
}
elseif ( in_category('3') ) 
{
include(TEMPLATEPATH . '/single-research.php');
} else {
include(TEMPLATEPATH . '/single-default.php');
}
?>