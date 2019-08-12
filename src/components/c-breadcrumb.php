<?php
/*
* Generates theme's standard main breadcrumb.
*/

$page_title = get_the_title( $post->ID );

$parent = $post->post_parent;

if ( $parent != 0 ) : ?>

<!-- breadcrumbs starts here -->
<nav aria-label="breadcrumb">
	<ol class="breadcrumb">
		<?php echo get_breadcrumb(); ?>
	</ol>
</nav>
<!-- breadcrumbs ends here -->
<?php else :

echo '<hr>';

endif;
