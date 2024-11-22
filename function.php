<?php

function jovic_theme_support_titles(){
//add dynamically generated title for the pages with the help of wordpress
add_theme_support('title-tag');

}

// Function to register navigation menus in WordPress
function jovicbiralo_menus() {
    // Array to define menu locations and their descriptions
    $locations = array(
        'primary' => 'Desktop Primary Left Sidebar', // Main navigation menu, typically displayed in the header but am displayinf this on the left please.. like side bar
        'footer' => 'Footer Menu Items' // Footer navigation menu, typically displayed in the footer
    );

    // Register the defined menu locations with WordPress
    register_nav_menus($locations);
}

// Hook to initialize custom functionality
// The 'init' hook runs early in the WordPress lifecycle and is used for tasks like registering menus, custom post types, and taxonomies
add_action('init', 'jovicbiralo_menus');

add_action('after_setup_theme', 'jovic_theme_support_titles');

function followjovic_register_styles() {

    $version = wp_get_theme()->get('Version');

    // Enqueue Bootstrap CSS
    wp_enqueue_style('followjovic_bootstrap', "https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css", array(), '4.4.1', 'all');

    // Enqueue Font Awesome
    wp_enqueue_style('followjovic_fontawesome', "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css", array(), '5.13.0', 'all');

    // Enqueue your custom style.css (depends on Bootstrap to ensure proper loading order)
    wp_enqueue_style('followjovic_mystyle', get_template_directory_uri() . "/style.css", array('followjovic_bootstrap'), $version, 'all');
}

// Hook to enqueue styles on the front-end
add_action('wp_enqueue_scripts', 'followjovic_register_styles');

function followjovic_register_scripts() {

    $version = wp_get_theme()->get('Version');

    // Enqueue Bootstrap CSS
    wp_enqueue_script('followjovic_jquery', "https://code.jquery.com/jquery-3.4.1.slim.min.js", array(), '3.4.1', 'all',true);

    wp_enqueue_script('followjovic_pooper', "https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js", array(), '1.16.0', 'all',true);

    wp_enqueue_script('followjovic_bootstrap', "https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js", array(), '4.4.1', 'all',true);

    wp_enqueue_script('followjovic_mainjs', get_template_directory_uri() . "/assets/js/main.js", array(), '1.0', 'all',true);

    
    
}

// Hook to enqueue styles on the front-end
add_action('wp_enqueue_scripts', 'followjovic_register_scripts');

?>
