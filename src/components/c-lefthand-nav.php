<?php
/*
* Lefthand nav
*/
$parent_ID = wp_get_post_parent_id( get_the_ID() );
$menu_title = get_the_title( get_the_ID() );

$page_args = [
	'child_of'    => $post->ID,
	'depth'       => 0,
	'exclude'     => $parent_ID,
	'title_li'    => '',
	'post_status' => 'publish',
	'link_after'  => '<span class="dropdown"></span>',
	'order'       => 'ASC',
	'orderby'     => 'menu_order',
];

$child_page_args = [
	'post_parent' => $post->ID,
	'post_type'   => 'any',
	'numberposts' => -1,
	'post_status' => 'publish',
];

$child_pages = get_children( $child_page_args );

if ( $child_pages ) :
?>
<!-- lefthand nav starts here -->
<div class="col-sm-4">
	<ul class="nav flex-column">
	<?php wp_list_pages( $page_args ); ?>
	</ul>
</div>
<!-- lefthand nav ends here -->
<?php endif;