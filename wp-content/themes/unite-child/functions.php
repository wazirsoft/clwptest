<?php

/**
 * Initiate post type films and it's taxonomies
 */
require get_stylesheet_directory() . '/inc/post-type-films.php';
require get_stylesheet_directory() . '/inc/register-taxonomies.php';

/**
 * Include helper functions
 */
require get_stylesheet_directory() . '/inc/helper.php';

/**
 * Initiate shortcodes
 */
require get_stylesheet_directory() . '/inc/shortcodes.php';

// Queue parent style followed by child/customized style
add_action( 'wp_enqueue_scripts', 'unite_enqueue_child_styles', PHP_INT_MAX);

// enqueue all styles to child theme
function unite_enqueue_child_styles() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
    wp_dequeue_style('unite-style');
    wp_enqueue_style( 'child-style',
        get_stylesheet_directory_uri() . '/style.css',
        array('parent-style')
    );
}

// add film meta to film listing
function addFilmMeta( $content ) {
    if ( !is_single() && 'films' == get_post_type() ) {
        $fileMeta = getFilmMetaContent();
        $content .= $fileMeta;
        return $content;
    } else {
        return $content;
    }
}
add_filter( 'the_content', 'addFilmMeta' );

// get film meta content for listing page
function getFilmMetaContent()
{
    global $post;

    // get film meta using post id
    extract(getFilmMeta($post->ID));
    $metaContent = '<ul>';

    if ($countries) {
        $metaContent .= "<li><strong>Countries:</strong> {$countries} </li>";
    }

    if ($genres) {
        $metaContent .= "<li><strong>Genre:</strong> {$genres} </li>";
    }

    if ($ticketPrice) {
        $metaContent .= "<li><strong>Ticket Price:</strong> {$ticketPrice} </li>";
    }

    if ($releaseDate) {
        $metaContent .= "<li><strong>Release Date:</strong> {$releaseDate} </li>";
    }

    $metaContent .= '</ul>';

    return $metaContent;
}