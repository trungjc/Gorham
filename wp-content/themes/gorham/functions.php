<?php
/**
 * functions and definitions
 */

require_once( 'library/cleanup.php' );
require_once( 'library/setup.php' );
require_once( 'library/nav.php' );
require_once( 'library/widgets.php' );

require_once( 'library/gorham.php' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/library/underscores/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/library/underscores/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/library/underscores/extras.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/library/underscores/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/library/underscores/jetpack.php';


/**
 * Enqueue scripts and styles
 */
function gorham_scripts() {

    // load gorham styles
    wp_enqueue_style( 'gorham-style', get_stylesheet_uri() );

    // load bootstrap css
    wp_enqueue_style( 'gorham-bootstrap', get_template_directory_uri() . '/assets/css/bootstrap/bootstrap.min.css' );

    // load bootstrap for WordPress css
    wp_enqueue_style( 'gorham-bootstrapwp', get_template_directory_uri() . '/assets/css/bootstrap-wp.css' );

    // load font awesome css
    wp_enqueue_style( 'gorham-fontawesome', get_template_directory_uri() . '/assets/css/FontAwesome/font-awesome.min.css' , array(), '4.3.0', 'all' );

    // load bootstrap.js
    wp_enqueue_script('gorham-bootstrapjs', get_template_directory_uri().'/assets/js/bootstrap/bootstrap.js', array('jquery') );

    // load bootstrap-wp.js
    wp_enqueue_script( 'gorham-bootstrapwp', get_template_directory_uri() . '/assets/js/bootstrap-wp.js', array('jquery') );

    // FitVid (responsive video)
    wp_enqueue_script( 'gorham-fitvids', get_template_directory_uri() . '/assets/js/FitVids.js-master/jquery.fitvids.js', array('jquery') );

    wp_enqueue_script( 'gorham-skip-link-focus-fix', get_template_directory_uri() . '/assets/js/skip-link-focus-fix.js', array(), '20130115', true );

    if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
        wp_enqueue_script( 'comment-reply' );
    }

    //load keyboard-image-navigation.js
    if ( is_singular() && wp_attachment_is_image() ) {
        wp_enqueue_script( 'gorham-keyboard-image-navigation', get_template_directory_uri() . '/assets/js/keyboard-image-navigation.js', array( 'jquery' ), '20120202' );
    }

}
add_action( 'wp_enqueue_scripts', 'gorham_scripts', 100);

if( function_exists('acf_add_options_page') ) {
	
	acf_add_options_page(array(
		'page_title' 	=> 'Website Options',
		'menu_title'	=> 'Website Options',
		'menu_slug' 	=> 'website-options',
		'capability'	=> 'edit_posts',
		'redirect'		=> true
	));
	
	acf_add_options_sub_page(array(
		'page_title' 	=> 'Footer',
		'menu_title'	=> 'Footer',
		'parent_slug'	=> 'website-options',
	));
	
}

// Remove p tags from images
function filter_ptags_on_images($content){
   return preg_replace('/<p>\s*(<a .*>)?\s*(<img .* \/>)\s*(<\/a>)?\s*<\/p>/iU', '\1\2\3', $content);
}

add_filter('the_content', 'filter_ptags_on_images');


// This theme uses post thumbnails
add_theme_support( 'post-thumbnails' );


// Crop image for homepage daycare centre
add_image_size( 'homepage-daycare-image', 770, 720, array( 'center', 'center' ) );

function add_mobile_responsive_js() {
    echo '<script type="text/javascript" src="'.get_template_directory_uri().'/assets/js/modernizr.custom.js"></script>';
    echo '<script type="text/javascript" src="'.get_template_directory_uri().'/assets/js/jquery.dlmenu.js"></script>';
    echo '<script type="text/javascript" src="'.get_template_directory_uri().'/assets/js/custom.js"></script>';
}
// Add hook for admin <head></head>
// add_action('admin_head', 'add_mobile_responsive_js');
// Add hook for front-end <head></head>
add_action('wp_head', 'add_mobile_responsive_js');