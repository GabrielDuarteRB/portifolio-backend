<?php

/**
 * Plugin Name: Resume
 */

add_action( 'init', 'resume_post_type' );

function resume_post_type() {

    $labels = array(
        'name'               => __( 'Resume' ),
        'add_new'            => __( 'Add New Resume' ),
        'add_new_item'       => __( 'Add New Resume' ),
        'edit_item'          => __( 'Edit Resume' ),
        'new_item'           => __( 'New Resume' ),
        'all_items'          => __( 'All Resume' ),
        'view_item'          => __( 'View Resume' ),
        'search_items'       => __( 'Search Resume' ),
        'featured_image'     => 'Poster',
        'set_featured_image' => 'Add Poster'
    );

    $args = array(
        'labels'            => $labels,
        'description'       => 'Holds our movies and movie specific data',
        'public'            => true,
        'menu_position'     => 5,
        'supports'          => array( 'title', 'thumbnail' ),
        'has_archive'       => true,
        'show_in_admin_bar' => true,
        'show_in_nav_menus' => true,
        'has_archive'       => true,
        'menu_icon'         => 'dashicons-media-archive',
        'query_var'         => 'Resume'
    );

    register_post_type('Resume', $args);
}