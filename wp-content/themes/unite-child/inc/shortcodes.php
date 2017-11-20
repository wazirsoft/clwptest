<?php

/**
 * All shortcode functions goes here
 */

// display 5 films
function latestFilmShortcode() {
    $query = new WP_Query( array( 'post_type' => 'films', 'posts_per_page' => '5', ) );
    $latestFilms = '';
    
    if ( $query->have_posts() ) :
    	$latestFilms .= '<ul>';
    
	    while ( $query->have_posts() ) : $query->the_post();
	    	$latestFilms .= '<li><a href="'.get_the_permalink().'">'.get_the_title().'</a></li>';
	    endwhile; wp_reset_postdata();
		
		$latestFilms .= '</ul>';
	
	endif;

	return $latestFilms;
}
add_shortcode('films', 'latestFilmShortcode');