<?php
/*
* Generates theme's standard main breadcrumb.
* Edge cases - not for pages that directly follow
* hierarchy from homepage (news, event, blog singles)
*/

function get_breadcrumb() {

	global $post;

	$trail      = '';
	$page_title = get_the_title( $post->ID );

	if ( $post->post_parent ) {

		$parent_id = $post->post_parent;

		while ( $parent_id ) {
			$page          = get_page( $parent_id );
			$breadcrumbs[] = '<li class="breadcrumb-item"><a href="' . get_the_permalink( $page->ID ) . '">' . get_the_title( $page->ID ) . '</a></li>';
			$parent_id     = $page->post_parent;
		}

		$breadcrumbs = array_reverse( $breadcrumbs );
		foreach ( $breadcrumbs as $crumb ) {
			$trail .= $crumb;
		}
	}

	$trail .= '<span class="breadcrumb-item active" aria-current='. $page_title .'>' . $page_title . '</span>';

	return $trail;

}
?>