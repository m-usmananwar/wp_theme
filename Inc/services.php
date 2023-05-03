<?php
// Register Custom Post Type Service
function create_service_cpt()
{

    $labels = array(
        'name' => _x('Services', 'Post Type General Name', 'ninja'),
        'singular_name' => _x('Service', 'Post Type Singular Name', 'ninja'),
        'menu_name' => _x('Services', 'Admin Menu text', 'ninja'),
        'name_admin_bar' => _x('Service', 'Add New on Toolbar', 'ninja'),
        'archives' => __('Service Archives', 'ninja'),
        'attributes' => __('Service Attributes', 'ninja'),
        'parent_item_colon' => __('Parent Service:', 'ninja'),
        'all_items' => __('All Services', 'ninja'),
        'add_new_item' => __('Add New Service', 'ninja'),
        'add_new' => __('Add New', 'ninja'),
        'new_item' => __('New Service', 'ninja'),
        'edit_item' => __('Edit Service', 'ninja'),
        'update_item' => __('Update Service', 'ninja'),
        'view_item' => __('View Service', 'ninja'),
        'view_items' => __('View Services', 'ninja'),
        'search_items' => __('Search Service', 'ninja'),
        'not_found' => __('Not found', 'ninja'),
        'not_found_in_trash' => __('Not found in Trash', 'ninja'),
        'featured_image' => __('Featured Image', 'ninja'),
        'set_featured_image' => __('Set featured image', 'ninja'),
        'remove_featured_image' => __('Remove featured image', 'ninja'),
        'use_featured_image' => __('Use as featured image', 'ninja'),
        'insert_into_item' => __('Insert into Service', 'ninja'),
        'uploaded_to_this_item' => __('Uploaded to this Service', 'ninja'),
        'items_list' => __('Services list', 'ninja'),
        'items_list_navigation' => __('Services list navigation', 'ninja'),
        'filter_items_list' => __('Filter Services list', 'ninja'),
    );
    $args = array(
        'label' => __('Service', 'ninja'),
        'description' => __('Custom Post Type for Services', 'ninja'),
        'labels' => $labels,
        'menu_icon' => 'dashicons-heart',
        'supports' => array('title', 'editor', 'excerpt', 'thumbnail', 'author', 'comments', 'post-formats'),
        'taxonomies' => array('category', 'post_tag'),
        'public' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'menu_position' => 5,
        'show_in_admin_bar' => true,
        'show_in_nav_menus' => true,
        'can_export' => true,
        'has_archive' => true,
        'hierarchical' => false,
        'exclude_from_search' => false,
        'show_in_rest' => true,
        'publicly_queryable' => true,
        'capability_type' => 'post',
    );
    register_post_type('service', $args);
}
add_action('init', 'create_service_cpt', 0);
