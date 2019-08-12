<?php
/*
* Rich text content box
*/
?>
<div class="col-sm-8" role="main">
	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

	<h2><?php the_title(); ?></h2>
	<p><?php the_content(); ?></p>

	<?php endwhile; 

	else: echo 'There is currently no content'; ?>
		
	<?php endif; ?>
</div>