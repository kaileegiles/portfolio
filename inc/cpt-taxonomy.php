<?php

function kgw_register_custom_post_types() {

    // Register Projects CPT
    $labels = array(
        'name'               => _x( 'Projects', 'post type general name' ),
        'singular_name'      => _x( 'Project', 'post type singular name' ),
        'menu_name'          => _x( 'Projects', 'admin menu' ),
        'name_admin_bar'     => _x( 'Projects', 'add new on admin bar' ),
        'add_new'            => _x( 'Add New', 'project'  ),
        'add_new_item'       => __( 'Add New Project'  ),
        'new_item'           => __( 'New Project' ),
        'edit_item'          => __( 'Edit Project' ),
        'view_item'          => __( 'View Project' ),
        'all_items'          => __( 'All Projects'  ),
        'search_items'       => __( 'Search Projects' ),
        'parent_item_colon'  => __( 'Parent Projects:' ),
        'not_found'          => __( 'No Projects found.' ),
        'not_found_in_trash' => __( 'No Projects found in Trash.' ),
        'insert_into_item'   => __( 'Insert into Projects'),
        'uploaded_to_this_item' => __( 'Uploaded to this Projects'),
        'filter_item_list'   => __( 'Filter project list'),
        'items_list_navigation' => __( 'Project list navigation'),
        'items_list'         => __( 'Project list'),
        'featured_image'     => __( 'Project feature image'),
        'set_featured_image' => __( 'Set project feature image'),
        'remove_featured_image' => __( 'Remove project feature image'),
        'use_featured_image' => __( 'Use as feature image'),
    );
    $args = array(
        'labels'              => $labels,
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'show_in_nav_menus'  => true,
        'show_in_admin_bar'  => true,
        'show_in_rest'       => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'web-developer-portfolio' ),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => 4,
        'menu_icon'          => 'dashicons-edit-large',
        'supports'           => array( 'title', 'thumbnail', 'editor', 'custom-fields'  ),
        );

    register_post_type( 'kgw-projects', $args );

}

add_action( 'init', 'kgw_register_custom_post_types' );