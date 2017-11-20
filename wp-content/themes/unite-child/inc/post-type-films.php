<?php
/*
* Creating a function to create films post type
*/
 
function postTypefilm() {
 
    // Set UI labels for Custom Post Type
    $labels = array(
        'name'                => _x( 'Films', 'Post Type General Name', 'unite-child' ),
        'singular_name'       => _x( 'Film', 'Post Type Singular Name', 'unite-child' ),
        'menu_name'           => __( 'Films', 'unite-child' ),
        'parent_item_colon'   => __( 'Parent Film', 'unite-child' ),
        'all_items'           => __( 'All Films', 'unite-child' ),
        'view_item'           => __( 'View Film', 'unite-child' ),
        'add_new_item'        => __( 'Add New Film', 'unite-child' ),
        'add_new'             => __( 'Add New', 'unite-child' ),
        'edit_item'           => __( 'Edit Film', 'unite-child' ),
        'update_item'         => __( 'Update Film', 'unite-child' ),
        'search_items'        => __( 'Search Film', 'unite-child' ),
        'not_found'           => __( 'Not Found', 'unite-child' ),
        'not_found_in_trash'  => __( 'Not found in Trash', 'unite-child' ),
    );
     
    $args = array(
        'label'               => __( 'films', 'unite-child' ),
        'description'         => __( 'Films information', 'unite-child' ),
        'labels'              => $labels,
        'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields', ),
        'taxonomies'          => array( 'genres', 'countries', 'years', 'actors'),
        'hierarchical'        => false,
        'public'              => true,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'show_in_nav_menus'   => true,
        'show_in_admin_bar'   => true,
        'menu_position'       => 5,
        'can_export'          => true,
        'has_archive'         => true,
        'exclude_from_search' => false,
        'publicly_queryable'  => true,
        'capability_type'     => 'page',
    );
     
    // Registering the Custom Post Type
    register_post_type( 'films', $args );
 
}
 
/* Hook the post type into init */
add_action( 'init', 'postTypefilm', 0 );