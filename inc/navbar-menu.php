<?php
/*
* Menu
*/

add_action( 'after_setup_theme', 'gfb_main_menu_register' );

if ( ! function_exists( 'gfb_main_menu_register' ) ):

  function gfb_main_menu_register() {  
      register_nav_menu( 'primary', __( 'Primary navigation', 'top_menu' ) );
  } 

endif;