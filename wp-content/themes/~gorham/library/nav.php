<?php

/**
 * Load custom WordPress nav walker.
 */
require get_template_directory() . '/library/bootstrap-wp-navwalker.php';

// the main menu
function gorham_main_nav() {
    // display the wp3 menu if available
    wp_nav_menu(array(
        'container' => false,                                       // remove nav container
        'container_class' => 'menu clearfix',                       // class of container (should you choose to use it)
        'menu' => __( 'The Primary Menu', 'gorham' ),             // nav name
        'menu_class' => 'nav navbar-nav',           // adding custom nav class
        'theme_location' => 'primary',                          // where it's located in the theme
        'before' => '',                                             // before the menu
        'after' => '',                                              // after the menu
        'link_before' => '',                                        // before each link
        'link_after' => '',                                         // after each link
        //'depth' => 3,                                             // limit the depth of the nav
        'fallback_cb' => 'gorham_bootstrap_navwalker::fallback',    // fallback
        'walker' => new gorham_bootstrap_navwalker()                    // for bootstrap nav
    ));
} // end gorham main nav
function gorham_mobile_main_nav() {

    // display the wp3 menu if available

    wp_nav_menu(array(

        'container' => false,                                       // remove nav container

        'container_class' => 'menu clearfix',                       // class of container (should you choose to use it)

        'menu' => __( 'The Primary Menu', 'gorham' ),             // nav name

        'menu_class' => 'dl-menu',           // adding custom nav class

        'theme_location' => 'primary',                          // where it's located in the theme

        'before' => '',                                             // before the menu

        'after' => '',                                              // after the menu

        'link_before' => '',                                        // before each link

        'link_after' => '',                                         // after each link

        //'depth' => 3,                                             // limit the depth of the nav

        'fallback_cb' => 'gorham_bootstrap_mobile_navwalker::fallback',    // fallback

        'walker' => new gorham_bootstrap_mobile_navwalker()                    // for bootstrap nav

    ));

} // end gorham mobile main nav
?>