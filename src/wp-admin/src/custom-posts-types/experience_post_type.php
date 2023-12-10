<?php

/**
 * Plugin Name: experience
 */

add_action( 'init', 'experience_post_type' );

function experience_post_type() {

    $labels = array(
        'name'               => __( 'Experience' ),
        'add_new'            => __( 'Add New experience' ),
        'add_new_item'       => __( 'Add New experience' ),
        'edit_item'          => __( 'Edit experience' ),
        'new_item'           => __( 'New experience' ),
        'all_items'          => __( 'All experience' ),
        'view_item'          => __( 'View experience' ),
        'search_items'       => __( 'Search experience' ),
        'featured_image'     => 'id',
        'set_featured_image' => 'id'
    );

    $args = array(
        'labels'            => $labels,
        'description'       => 'Comments experiences',
        'public'            => true,
        'menu_position'     => 5,
        'supports'          => array( 'title' ),
        'has_archive'       => true,
        'show_in_admin_bar' => true,
        'show_in_nav_menus' => true,
        'has_archive'       => true,
        'menu_icon'         => 'dashicons-slides',
        'query_var'         => 'experience'
    );

    register_post_type('experience', $args);
}