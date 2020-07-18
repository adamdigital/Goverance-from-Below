<?php

/**
 * GovFromBelow custom post type 'Lectures'
 *
 * @package gfb
 */

if (!defined('ABSPATH')) {
    exit;
}
/**
*
* Register the Lecture custom post type
*
* */
add_action('init', 'gfb_ctp_lecture_init');

function gfb_ctp_lecture_init()
{

    $labels = [
        'name' => 'Lectures',
        'singular_name' => 'Lecture',
        'add_new' => 'Add New',
        'add_new_item' => 'Add New',
        'edit_item' => 'Edit Lecture Entry',
        'new_item' => 'New Entry',
        'all_items' => 'View All Lectures',
        'view_item' => 'View Entries',
        'search_items' => 'Search Lectures',
        'not_found' => 'No entries found',
        'not_found_in_trash' => 'No Lecture entries found in Bin',
        'parent_item_colon' => '',
        'menu_name' => 'Lectures',
    ];

    $args = [
        'labels' => $labels,
        'public' => true,
        'publicly_queryable' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'query_var' => true,
        'rewrite' => array('slug' => 'Lectures'),
        'capability_type' => 'post',
        'has_archive' => true,
        'hierarchical' => true,
        'menu_position' => null,
        'menu_icon' => 'dashicons-id-alt',
        'supports' => array('title'),
    ];

    register_post_type('lectures', $args);
}

/**
*
* Remove side meta boxes on Lectures entry admin page - these have been replaced in ACF with ACF fields
*
* */
add_action('do_meta_boxes', 'gfb_remove_plugin_metaboxes_lectures');

function gfb_remove_plugin_metaboxes_lectures()
{
    global $lectureTaxonomies;

    if (count($lectureTaxonomies) > 0) {
        remove_meta_box('institutionsdiv', 'Lectures', 'side');
        remove_meta_box('locationsdiv', 'Lectures', 'side');
    }
}
