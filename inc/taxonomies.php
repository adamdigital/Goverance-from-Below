<?php

/**
 * document taxonomies
 *
 * @package govfrombelow
 */

$documentTaxonomies = [
    'books',
    'articles',
    'journalism',
    'data'
];

/**
*
* Register the taxonomies used in the document section
*
* */
add_action('init', 'gfb_create_document_taxonomies');

function gfb_create_document_taxonomies()
{
    global $documentTaxonomies;

    if (is_array($documentTaxonomies)) {
        foreach ($documentTaxonomies as $taxonomy) {
            $taxonomyFriendlyTitle = str_replace('-', ' ', $taxonomy);
            $taxonomyFriendlyTitle = ucfirst($taxonomyFriendlyTitle);

            $labels = array(
            'name'              => _x($taxonomyFriendlyTitle, 'taxonomy general name', 'textdomain'),
            'singular_name'     => _x($taxonomyFriendlyTitle, 'taxonomy singular name', 'textdomain'),
            'search_items'      => __($taxonomyFriendlyTitle, 'textdomain'),
            'all_items'         => __('All ' . $taxonomyFriendlyTitle, 'textdomain'),
            'parent_item'       => __('Parent ' . $taxonomyFriendlyTitle, 'textdomain'),
            'parent_item_colon' => __('Parent ' . $taxonomyFriendlyTitle, 'textdomain'),
            'edit_item'         => __('Edit ' . $taxonomyFriendlyTitle, 'textdomain'),
            'update_item'       => __('Update ' . $taxonomyFriendlyTitle, 'textdomain'),
            'add_new_item'      => __('Add New ' . $taxonomyFriendlyTitle, 'textdomain'),
            'new_item_name'     => __('New ' . $taxonomyFriendlyTitle . ' Name', 'textdomain'),
            'menu_name'         => __($taxonomyFriendlyTitle, 'textdomain'),
            );

            $args = array(
            'hierarchical'      => true,
            'labels'            => $labels,
            'show_ui'           => true,
            'show_admin_column' => true,
            'query_var'         => true,
            'rewrite'           => array( 'slug' => 'document-' . $taxonomy )
            );

            register_taxonomy($taxonomy, 'Documents', $args);
        }
    }
}
