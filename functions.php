<?php

// Adding JS code to be run in <head>

function mytheme_js_run_head() {
	?>
	<script type="text/javascript">
		jQuery.noConflict();
		jQuery(document).ready(function($) {
			var addthis_config = {"data_track_addressbar":false};
                        $('#navbar').affix();
			
		});
	</script>
	<?php
}
add_action('wp_head', 'mytheme_js_run_head');

//Registering all Javascript this theme uses. Register scripts is as following handle, source, dependencies, version, run in footer 

function mytheme_register_scripts() { 
  wp_register_script('modernizer', get_template_directory_uri().'/js/modernizer.min.js', false, 2.6, false);
  wp_register_script('respond', get_template_directory_uri().'/js/respond.min.js', false, 2012, false);
  wp_register_script('jquery', '//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js', false, null, true);
  wp_register_script('bootstrap', get_template_directory_uri().'/js/bootstrap.min.js', false, null, true);
  wp_register_script('backstreatch', get_template_directory_uri().'/js/jquery.backstretch.min.js', false, null, true);
} 

add_action('init', 'mytheme_register_scripts');

//Enqueuing scripts

function mytheme_enqueue_scripts(){ 
  if (!is_admin()):
        wp_enqueue_script('modernizer');
        wp_enqueue_script('respond');
        wp_enqueue_script('backstreatch');
        wp_enqueue_script('jquery');
        wp_enqueue_script('bootstrap');
  endif; 
} 

add_action('wp_print_scripts', 'mytheme_enqueue_scripts');


// Register widgetized areas

function theme_widgets_init() {
    // Area 1
    register_sidebar( array (
    'name' => 'Primary Widget Area',
    'id' => 'primary_widget_area',
    'before_widget' => '<li id="%1$s" class="widget-container %2$s">',
    'after_widget' => "</li>",
    'before_title' => '<h3 class="widget-title">',
    'after_title' => '</h3>',
  ) );
 
    // Area 2
    register_sidebar( array (
    'name' => 'Secondary Widget Area',
    'id' => 'secondary_widget_area',
    'before_widget' => '<li id="%1$s" class="widget-container %2$s">',
    'after_widget' => "</li>",
    'before_title' => '<h3 class="widget-title">',
    'after_title' => '</h3>',
  ) );
} // end theme_widgets_init
 
add_action( 'init', 'theme_widgets_init' );

// Detect cross-browser compatibility and attaches to body class

add_filter('body_class','browser_body_class');
function browser_body_class($classes) {
  global $is_lynx, $is_gecko, $is_IE, $is_opera, $is_NS4, $is_safari, $is_chrome, $is_iphone;

  if($is_lynx) $classes[] = 'lynx';
  elseif($is_gecko) $classes[] = 'gecko';
  elseif($is_opera) $classes[] = 'opera';
  elseif($is_NS4) $classes[] = 'ns4';
  elseif($is_safari) $classes[] = 'safari';
  elseif($is_chrome) $classes[] = 'chrome';
  elseif($is_IE) $classes[] = 'ie';
  else $classes[] = 'unknown';

  if($is_iphone) $classes[] = 'iphone';
  return $classes;
}

// Support for feature thumb posts
add_theme_support( 'post-thumbnails' );

//Registering the theme's menus

function register_my_menus() {
  register_nav_menus(
    array(
      'header-menu' => __( 'Header Menu' ),
      'extra-menu' => __( 'Extra Menu' )
    )
  );
}
add_action( 'init', 'register_my_menus' );

?>