<?php

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

    wp_enqueue_script('followjovic_bootstrap', get_template_directory_uri() . "/assests/js/main.js", array(), '1.0', 'all',true);

    
    
}

// Hook to enqueue styles on the front-end
add_action('wp_enqueue_scripts', 'followjovic_register_scripts');

?>
