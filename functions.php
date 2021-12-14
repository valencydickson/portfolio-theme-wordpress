<?php

function portfolio_setup()
{
    //post and comment RSS Feed
    add_theme_support('automatic-feed-links');

    //Navigation Menu
    register_nav_menus(array(
        'primary' => __('Primary Menu', 'myfirsttheme'),
        'secondary' => __('Secondary Menu', 'myfirsttheme'),
    ));

}

add_action("after_setup_theme", "portfolio_setup");

function add_theme_scripts()
{
    // Add stylesheets
    echo "Hello";
    wp_enqueue_style('style', get_stylesheet_uri());
    wp_enqueue_style('app', get_template_directory_uri() . '/assets/css/app.css');
    wp_enqueue_style('media-style', get_template_directory_uri() . '/assets/css/media-style.css');

    //Add script
    wp_enqueue_script('app', get_template_directory_uri() . '/assets/js/app.js', array('jquery'), true);
}

add_action('wp_enqueue_scripts', 'add_theme_scripts');
