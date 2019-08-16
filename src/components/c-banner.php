<?php
/*
* Page feature banner.
*/

// ACF generated banner
$feature_banner_image_url = get_field('feature_banner_image_url');
$feature_banner_main_title = get_field('feature_banner_main_title');
$feature_banner_lead_text = get_field('feature_banner_lead_text');
$feature_banner_button_lead_text = get_field('feature_banner_button_lead_text');
$feature_banner_button_text = get_field('feature_banner_button_text');
$feature_banner_button_url = get_field('feature_banner_button_url');

// Check user has selected an image. If not, hide banner.
if ( $feature_banner_image_url ) : ?>

<!-- banner starts here -->
<div class="jumbotron text-light d-print-none">
	<div class="container">
	<h1 class="display-4"><?php echo $feature_banner_main_title; ?></h1>
	<p class="lead"><?php echo $feature_banner_lead_text; ?></p>
	<hr class="my-4">
	<?php if ( $feature_banner_button_text ) : ?>
	<p class="col-5"><?php echo $feature_banner_button_lead_text ?></p>
	<a href="<?php echo $feature_banner_button_url; ?>"><button type="button" class="btn btn-success"><span class="glyphicon glyphicon-book"></span><?php echo $feature_banner_button_text; ?></button></a> 
	<?php endif; ?>
	</div>
</div>

<script>
	// JS resizing background image to block element
 	$(".jumbotron").backstretch("<?php echo $feature_banner_image_url; ?>");
</script>

<!-- banner ends here -->

<?php endif;

// Homepage can't be easily customised with ACF so we're going manual here for now
if ( is_home() ) : ?>
<!-- banner starts here -->

<div class="jumbotron text-light d-print-none">
	<div class="container">
	<h1 class="display-4">Decentralization and Popular Democracy: Governance from Below in Bolivia</h1>
	<p class="lead">Jean-Paul Faguet uses the remarkable case of Bolivia, a radical reformer over two decades, to investigate what happens when a country decentralizes.</p>
	<hr class="my-4">
	<p class="col-5"></p>
	<a href="/buy-now"><button type="button" class="btn btn-success"><span class="glyphicon glyphicon-book"></span>BUY NOW (out in paperback)</button></a> 
	</div>
</div>

<script>
	// JS resizing background image to block element
 	$(".jumbotron").backstretch("https://governancefrombelow.net/wp-content/uploads/2013/12/bol-chile-2500x470.jpg");
</script>

<?php endif;