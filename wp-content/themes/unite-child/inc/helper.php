<?php
/**
 * All helper functions goes here
 */


// get film meta from film id
function getFilmMeta($postId)
{
    $filmMeta = array();
    $filmMeta['countries'] = wp_get_post_terms( $postId, 'countries', array("fields" => "names"));
    if (count($filmMeta['countries']) > 0) {
        $filmMeta['countries'] = implode(', ', $filmMeta['countries']);
    }else {
        $filmMeta['countries'] = false;
    }

    $filmMeta['genres'] = wp_get_post_terms( $postId, 'genres', array("fields" => "names"));
    if (count($filmMeta['genres']) > 0) {
        $filmMeta['genres'] = implode(', ', $filmMeta['genres']);
    }else {
        $filmMeta['genres'] = false;
    }

    $filmMeta['ticketPrice'] = get_field( "ticket_price" );
    $filmMeta['releaseDate'] = get_field( "release_date" );

    return $filmMeta;
}