<?php

// Register Custom Taxonomy
function region_taxonomy() {

	$labels = array(
		'name'                       => _x( 'Regions', 'Taxonomy General Name', 'text_domain' ),
		'singular_name'              => _x( 'Region', 'Taxonomy Singular Name', 'text_domain' ),
		'menu_name'                  => __( 'Region', 'text_domain' ),
		'all_items'                  => __( 'All Regions', 'text_domain' ),
		'parent_item'                => __( 'Parent Region', 'text_domain' ),
		'parent_item_colon'          => __( 'Parent Region:', 'text_domain' ),
		'new_item_name'              => __( 'New Region Name', 'text_domain' ),
		'add_new_item'               => __( 'Add New Region', 'text_domain' ),
		'edit_item'                  => __( 'Edit Region', 'text_domain' ),
		'update_item'                => __( 'Update Region', 'text_domain' ),
		'view_item'                  => __( 'View Region', 'text_domain' ),
		'separate_items_with_commas' => __( 'Separate Regions with commas', 'text_domain' ),
		'add_or_remove_items'        => __( 'Add or remove Region', 'text_domain' ),
		'choose_from_most_used'      => __( 'Choose from the most used', 'text_domain' ),
		'popular_items'              => __( 'Popular Regions', 'text_domain' ),
		'search_items'               => __( 'Search Regions', 'text_domain' ),
		'not_found'                  => __( 'Not Found', 'text_domain' ),
		'no_terms'                   => __( 'No Regions', 'text_domain' ),
		'items_list'                 => __( 'Regions list', 'text_domain' ),
		'items_list_navigation'      => __( 'Regions list navigation', 'text_domain' ),
	);
	$args = array(
		'labels'                     => $labels,
		'hierarchical'               => false,
		'public'                     => true,
		'show_ui'                    => true,
		'show_admin_column'          => true,
		'show_in_nav_menus'          => true,
		'show_tagcloud'              => false,
	);
	register_taxonomy( 'region', array( 'entry' ), $args );

}
add_action( 'init', 'region_taxonomy', 0 );

function theme_taxonomy() {

	$labels = array(
		'name'                       => _x( 'Themes', 'Taxonomy General Name', 'text_domain' ),
		'singular_name'              => _x( 'Theme', 'Taxonomy Singular Name', 'text_domain' ),
		'menu_name'                  => __( 'Theme', 'text_domain' ),
		'all_items'                  => __( 'All Themes', 'text_domain' ),
		'parent_item'                => __( 'Parent Themes', 'text_domain' ),
		'parent_item_colon'          => __( 'Parent Themes:', 'text_domain' ),
		'new_item_name'              => __( 'New Theme Name', 'text_domain' ),
		'add_new_item'               => __( 'Add New Theme', 'text_domain' ),
		'edit_item'                  => __( 'Edit Theme', 'text_domain' ),
		'update_item'                => __( 'Update Theme', 'text_domain' ),
		'view_item'                  => __( 'View Theme', 'text_domain' ),
		'separate_items_with_commas' => __( 'Separate Themes with commas', 'text_domain' ),
		'add_or_remove_items'        => __( 'Add or remove Theme', 'text_domain' ),
		'choose_from_most_used'      => __( 'Choose from the most used', 'text_domain' ),
		'popular_items'              => __( 'Popular Theme', 'text_domain' ),
		'search_items'               => __( 'Search Theme', 'text_domain' ),
		'not_found'                  => __( 'Not Found', 'text_domain' ),
		'no_terms'                   => __( 'No Regions', 'text_domain' ),
		'items_list'                 => __( 'Themes list', 'text_domain' ),
		'items_list_navigation'      => __( 'Themes list navigation', 'text_domain' ),
	);
	$args = array(
		'labels'                     => $labels,
		'hierarchical'               => false,
		'public'                     => true,
		'show_ui'                    => true,
		'show_admin_column'          => true,
		'show_in_nav_menus'          => true,
		'show_tagcloud'              => false,
	);
	register_taxonomy( 'theme', array( 'entry' ), $args );

}
add_action( 'init', 'theme_taxonomy', 0 );
