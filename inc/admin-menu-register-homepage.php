<?php

if (!defined('ABSPATH')) {
    exit;
}

/***
*
* Create header section in lefthand menu - ACF options
* https://www.advancedcustomfields.com/resources/acf_add_options_page/
*/
add_action('acf/init', 'headersettings_option_pages');

function headersettings_option_pages()
{
    // (ACF pro required)
    if (function_exists('acf_add_options_page')) {
        acf_add_options_page(
            array(
                'page_title' => 'Homepage settings',
                'capability' => 'manage_options',
                'icon_url'   => 'dashicons-welcome-widgets-menus',
                'menu_title' => 'Homepage',
                'menu_slug'  => 'homepage-settings',
                'position'  => '4',
                'redirect'   => false,
            )
        );
    }
}
