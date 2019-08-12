<?php
/*
* Lefthand nav
*/
$secondary_page_content_text = get_field('secondary_page_content_text');
$secondary_page_content_title = get_field('secondary_page_content_title');

if ( $secondary_page_content_text ) : ?>

<div class="col">
 <div class="card-deck">
   <div class="card box-shadow">
	 <div class="card-header"><?php echo $secondary_page_content_title; ?></div>
	 <div class="card-body"><?php echo $secondary_page_content_text; ?></div>
  </div>
 </div>
</div>

<?php endif; ?>