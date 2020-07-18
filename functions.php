<?php

if (!defined('ABSPATH')) {
    exit;
}
// Includes

require_once get_template_directory() . '/inc/bootstrap-navwalker.php';
require_once get_template_directory() . '/inc/enqueue.php';
require_once get_template_directory() . '/inc/breadcrumb.php';
require_once get_template_directory() . '/inc/navbar-menu.php';
require_once get_template_directory() . '/inc/taxonomies.php';
require_once get_template_directory() . '/inc/cpt-documents.php';
require_once get_template_directory() . '/inc/cpt-lectures.php';
require_once get_template_directory() . '/inc/admin-menu-register-homepage.php';

// Overrides scheduling posts in the future
remove_action('future_post', '_future_post_hook');
add_filter('wp_insert_post_data', 'nacin_do_not_set_posts_to_future');

function nacin_do_not_set_posts_to_future($data)
{
    if ($data['post_status'] == 'future' && $data['post_type'] == 'post') {
        $data['post_status'] = 'publish';
    }
    return $data;
}

// Detect cross-browser compatibility and attaches to body class

add_filter('body_class', 'browser_body_class');

function browser_body_class($classes)
{

    global $is_lynx, $is_gecko, $is_IE, $is_opera, $is_NS4, $is_safari, $is_chrome, $is_iphone;
    if ($is_lynx) {
        $classes[] = 'lynx';
    } elseif ($is_gecko) {
        $classes[] = 'gecko';
    } elseif ($is_opera) {
        $classes[] = 'opera';
    } elseif ($is_NS4) {
        $classes[] = 'ns4';
    } elseif ($is_safari) {
        $classes[] = 'safari';
    } elseif ($is_chrome) {
        $classes[] = 'chrome';
    } elseif ($is_IE) {
        $classes[] = 'ie';
    } else {
        $classes[] = 'unknown';
    }

    if ($is_iphone) {
        $classes[] = 'iphone';
    }
    return $classes;
}

// Support for feature thumb posts
add_theme_support('post-thumbnails');
