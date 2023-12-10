<?php

/**
 * Plugin Name: My services
 */

add_action( 'init', 'my_services_post_type' );

function my_services_post_type() {

    $labels = array(
        'name'               => __( 'My services' ),
        'add_new'            => __( 'Add New My services' ),
        'add_new_item'       => __( 'Add New My services' ),
        'edit_item'          => __( 'Edit My services' ),
        'new_item'           => __( 'New My services' ),
        'all_items'          => __( 'All My services' ),
        'view_item'          => __( 'View My services' ),
        'search_items'       => __( 'Search My services' ),
        'featured_image'     => 'Imagem do Trabalho',
        'set_featured_image' => 'Imagem do Trabalho'
    );

    $args = array(
        'labels'            => $labels,
        'description'       => 'Comments about your services',
        'public'            => true,
        'menu_position'     => 5,
        'supports'          => array( 'title', 'editor' ),
        'has_archive'       => true,
        'show_in_admin_bar' => true,
        'show_in_nav_menus' => true,
        'has_archive'       => true,
        'menu_icon'         => 'dashicons-hammer',
        'query_var'         => 'My services'
    );

    register_post_type('My services', $args);
}