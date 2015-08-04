<?php
/*
Plugin Name: Gorham Real Estate Custom Post Types
Description: Creates custom post types for the Gorham Real Estate website
*/
/* Start Adding Functions Below this Line */

// Our custom post type function
function create_posttype() {

	register_post_type( 'apartment',
	// CPT Options
		array(
			'labels' => array(
				'name' => __( 'Apartments' ),
				'singular_name' => __( 'Apartment' )
			),
			'public' => true,
			'has_archive' => true,
			'hierarchical' => true,
			'rewrite' => array('slug' => 'apartment'),
			// on the supports param here you see no 'editor'  
			'supports' => array('title', 'thumbnail') 
		)
	);
	
	register_post_type( 'property',
	// CPT Options
		array(
			'labels' => array(
				'name' => __( 'Properties' ),
				'singular_name' => __( 'Property' )
			),
			'public' => true,
			'has_archive' => true,
			'hierarchical' => true,
			'rewrite' => array('slug' => 'property'),
			// on the supports param here you see no 'editor'  
			'supports' => array('title', 'thumbnail') 
		)
	);
	
	
	register_post_type( 'homepage_banner',
	// CPT Options
		array(
			'labels' => array(
				'name' => __( 'Homepage Banners' ),
				'singular_name' => __( 'Homepage Banner' )
			),
			'public' => true,
			'has_archive' => false,
			'hierarchical' => true,
			'rewrite' => array('slug' => 'homepage-banner'),
			// on the supports param here you see no 'editor'  
			'supports' => array('title', 'thumbnail') 
		)
	);
}
// Hooking up our function to theme setup
add_action( 'init', 'create_posttype' );




/* Stop Adding Functions Below this Line */
?>