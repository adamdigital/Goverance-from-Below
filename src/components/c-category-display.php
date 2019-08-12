<?php
/*
* Category widget
* Displays ACF chosen cat on the page
*/

$select_category_to_display = get_field('select_category_to_display');

if ( $select_category_to_display ) :

$args = array(
  'cat'=> $select_category_to_display,
  'post_per_page' => 10,
  'order' => 'ASC',
);

$the_query = new WP_Query( $args );

echo '<div class="col-sm-8">';

while ( $the_query->have_posts() ) : $the_query->the_post();

echo '<h3 class="pt-3"><a href="' . get_the_permalink() . '">' . get_the_title() . '</a></h3>';
echo '<p>' . the_excerpt() . '</p>';

  // End the loop.
endwhile;

echo '</div>';

wp_reset_postdata();

endif;