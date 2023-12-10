<?php

/**
 * Plugin Name: Contact
 */

add_action( 'init', 'contact_post_type' );

function contact_post_type() {

    $labels = array(
        'name'               => __( 'Contact' ),
        'add_new'            => __( 'Add New contact' ),
        'add_new_item'       => __( 'Add New contact' ),
        'edit_item'          => __( 'Edit contact' ),
        'new_item'           => __( 'New contact' ),
        'all_items'          => __( 'All contacte' ),
        'view_item'          => __( 'View contact' ),
        'search_items'       => __( 'Search contact' ),
        'featured_image'     => 'id',
        'set_featured_image' => 'id'
    );

    $args = array(
        'labels'            => $labels,
        'description'       => 'Contact Forms ',
        'public'            => true,
        'menu_position'     => 5,
        'supports'          => array( 'title', 'custom-fields' ),
        'has_archive'       => true,
        'show_in_admin_bar' => true,
        'show_in_nav_menus' => true,
        'has_archive'       => true,
        'menu_icon'         => 'dashicons-share',
        'query_var'         => 'contact'
    );

    register_post_type('contact', $args);
}