<?php

function tryout_register_styles(){
    wp_enqueue_style('tryout-style', get_template_directory_uri() . '/style.css', array(), '1.0', 'all');
}

add_action('wp_enqueue_scripts', 'tryout_register_styles');

function tryout_register_scripts(){
    wp_enqueue_script('tryout-main', get_template_directory_uri() . '/assets/js/main.js', array(), '1.0', 'all');
}

add_action('wp_enqueue_scripts', 'tryout_register_scripts');
?>