<?php

/**
 * Plugin Name: Skills
 */

add_action( 'init', 'skills_post_type' );

function skills_post_type() {

    $labels = array(
        'name'               => __( 'Skills' ),
        'add_new'            => __( 'Add New skill' ),
        'add_new_item'       => __( 'Add New skill' ),
        'edit_item'          => __( 'Edit skill' ),
        'new_item'           => __( 'New skill' ),
        'all_items'          => __( 'All skills' ),
        'view_item'          => __( 'View skills' ),
        'search_items'       => __( 'Search skills' ),
        'featured_image'     => 'Poster',
        'set_featured_image' => 'Add Poster'
    );

    $args = array(
        'labels'            => $labels,
        'description'       => 'Holds our movies and movie specific data',
        'public'            => true,
        'menu_position'     => 5,
        'supports'          => array( 'title' ),
        'has_archive'       => true,
        'show_in_admin_bar' => true,
        'show_in_nav_menus' => true,
        'has_archive'       => true,
        'menu_icon'         => 'dashicons-portfolio',
        'query_var'         => 'skills'
    );

    register_post_type('skills', $args);
}