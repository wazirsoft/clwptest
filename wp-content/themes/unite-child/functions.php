<?php

// Queue parent style followed by child/customized style
add_action( 'wp_enqueue_scripts', 'unite_enqueue_child_styles', PHP_INT_MAX);

function unite_enqueue_child_styles() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
    wp_dequeue_style('unite-style');
    wp_enqueue_style( 'child-style',
        get_stylesheet_directory_uri() . '/style.css',
        array('parent-style')
    );
}

/**
 * Initiate post type flims.
 */
require get_stylesheet_directory() . '/inc/post-type-films.php';
require get_stylesheet_directory() . '/inc/register-taxonomies.php';