<?php

/**
 * Plugin Name: My works
 */

add_action( 'init', 'my_works_post_type' );

function my_works_post_type() {

    $labels = array(
        'name'               => __( 'My works' ),
        'add_new'            => __( 'Add New My works' ),
        'add_new_item'       => __( 'Add New My works' ),
        'edit_item'          => __( 'Edit My works' ),
        'new_item'           => __( 'New My works' ),
        'all_items'          => __( 'All My works' ),
        'view_item'          => __( 'View My works' ),
        'search_items'       => __( 'Search My works' ),
        'featured_image'     => 'Imagem do Trabalho',
        'set_featured_image' => 'Imagem do Trabalho'
    );

    $args = array(
        'labels'            => $labels,
        'description'       => 'Comments about you',
        'public'            => true,
        'menu_position'     => 5,
        'supports'          => array( 'title', 'editor', 'thumbnail' ),
        'has_archive'       => true,
        'show_in_admin_bar' => true,
        'show_in_nav_menus' => true,
        'has_archive'       => true,
        'menu_icon'         => 'dashicons-dashboard',
        'query_var'         => 'My works'
    );

    register_post_type('My works', $args);
}