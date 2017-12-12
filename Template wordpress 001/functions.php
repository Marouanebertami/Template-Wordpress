<?php

function template_script_enqueue(){

    wp_enqueue_style('tutostyle', get_template_directory_uri() . '/css/tuto.css', array(), '1.0.0', 'all');
    wp_enqueue_script('tutjs', get_template_directory_uri() . '/js/tuto.js', array(), '1.0.0', true);

}

add_action('wp_enqueue_scripts', 'template_script_enqueue');

function template_theme_setup(){

    add_theme_support('menus');

    register_nav_menu('top', 'Top Menu');
    register_nav_menu('primary', 'Primary Header Navigation');
    register_nav_menu('footer', 'Footer Navigation');

}

add_action('init', 'template_theme_setup');
