<?php

/**
 * Plugin Name: About Me
 */

add_action( 'init', 'about_me_post_type' );

function about_me_post_type() {

    $labels = array(
        'name'               => __( 'About me' ),
        'add_new'            => __( 'Add New about me' ),
        'add_new_item'       => __( 'Add New about me' ),
        'edit_item'          => __( 'Edit about me' ),
        'new_item'           => __( 'New about me' ),
        'all_items'          => __( 'All about me' ),
        'view_item'          => __( 'View about me' ),
        'search_items'       => __( 'Search about me' ),
        'featured_image'     => 'id',
        'set_featured_image' => 'id'
    );

    $args = array(
        'labels'            => $labels,
        'description'       => 'Comments about you',
        'public'            => true,
        'menu_position'     => 5,
        'supports'          => array( 'title', 'editor' ),
        'has_archive'       => true,
        'show_in_admin_bar' => true,
        'show_in_nav_menus' => true,
        'has_archive'       => true,
        'menu_icon'         => 'dashicons-id',
        'query_var'         => 'about me'
    );

    register_post_type('about me', $args);
}