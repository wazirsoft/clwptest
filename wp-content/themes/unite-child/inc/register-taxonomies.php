<?php 

// create genre taxonomy
function genreTaxonomy() {
 
  $labels = array(
    'name' => _x( 'Genre', 'taxonomy general name', 'unite-child' ),
    'singular_name' => _x( 'Genre', 'taxonomy singular name', 'unite-child' ),
    'search_items' =>  __( 'Search Genre', 'unite-child' ),
    'all_items' => __( 'All Genres', 'unite-child' ),
    'edit_item' => __( 'Edit Genre', 'unite-child' ), 
    'update_item' => __( 'Update Genre', 'unite-child' ),
    'add_new_item' => __( 'Add New Genre', 'unite-child' ),
    'new_item_name' => __( 'New Genre Name', 'unite-child' ),
    'menu_name' => __( 'Genre', 'unite-child' ),
  );    
 
  // Now register the taxonomy
  register_taxonomy('genres',array('films'), array(
    'hierarchical' => false,
    'labels' => $labels,
    'show_ui' => true,
    'show_admin_column' => true,
    'query_var' => true,
    'rewrite' => array( 'slug' => 'genre' ),
  ));
 
}

// create country taxonomy
function countryTaxonomy() {
 
  $labels = array(
    'name' => _x( 'Country', 'taxonomy general name', 'unite-child' ),
    'singular_name' => _x( 'Country', 'taxonomy singular name', 'unite-child' ),
    'search_items' =>  __( 'Search Countries', 'unite-child' ),
    'all_items' => __( 'All Countries', 'unite-child' ),
    'edit_item' => __( 'Edit Country', 'unite-child' ), 
    'update_item' => __( 'Update Country', 'unite-child' ),
    'add_new_item' => __( 'Add New Country', 'unite-child' ),
    'new_item_name' => __( 'New Country Name', 'unite-child' ),
    'menu_name' => __( 'Country', 'unite-child' ),
  );    
 
  // Now register the taxonomy
  register_taxonomy('countries',array('films'), array(
    'hierarchical' => false,
    'labels' => $labels,
    'show_ui' => true,
    'show_admin_column' => true,
    'query_var' => true,
    'rewrite' => array( 'slug' => 'country' ),
  ));
 
}

// create Year taxonomy
function yearTaxonomy() {
 
  $labels = array(
    'name' => _x( 'Year', 'taxonomy general name', 'unite-child' ),
    'singular_name' => _x( 'Year', 'taxonomy singular name', 'unite-child' ),
    'search_items' =>  __( 'Search Years', 'unite-child' ),
    'all_items' => __( 'All Years', 'unite-child' ),
    'edit_item' => __( 'Edit Year', 'unite-child' ), 
    'update_item' => __( 'Update Year', 'unite-child' ),
    'add_new_item' => __( 'Add New Year', 'unite-child' ),
    'new_item_name' => __( 'New Year Name', 'unite-child' ),
    'menu_name' => __( 'Year', 'unite-child' ),
  );    
 
  // Now register the taxonomy
  register_taxonomy('years',array('films'), array(
    'hierarchical' => false,
    'labels' => $labels,
    'show_ui' => true,
    'show_admin_column' => true,
    'query_var' => true,
    'rewrite' => array( 'slug' => 'year' ),
  ));
 
}

// create Actors taxonomy
function actorTaxonomy() {
 
  $labels = array(
    'name' => _x( 'Actors', 'taxonomy general name', 'unite-child' ),
    'singular_name' => _x( 'Actor', 'taxonomy singular name', 'unite-child' ),
    'search_items' =>  __( 'Search Actors', 'unite-child' ),
    'all_items' => __( 'All Actors', 'unite-child' ),
    'edit_item' => __( 'Edit Actor', 'unite-child' ), 
    'update_item' => __( 'Update Actor', 'unite-child' ),
    'add_new_item' => __( 'Add New Actor', 'unite-child' ),
    'new_item_name' => __( 'New Actor Name', 'unite-child' ),
    'menu_name' => __( 'Actors', 'unite-child' ),
  );    
 
  // Now register the taxonomy
  register_taxonomy('actors',array('films'), array(
    'hierarchical' => false,
    'labels' => $labels,
    'show_ui' => true,
    'show_admin_column' => true,
    'query_var' => true,
    'rewrite' => array( 'slug' => 'actors' ),
  ));
 
}

// hook all taxonomies
add_action( 'init', 'genreTaxonomy', 0 );
add_action( 'init', 'countryTaxonomy', 0 );
add_action( 'init', 'yearTaxonomy', 0 );
add_action( 'init', 'actorTaxonomy', 0 );