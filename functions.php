<?php

get_template_part('register-post/request');

get_template_part('helpers/variables');

get_template_part('api/callback_form');

add_action( 'wp_enqueue_scripts', 'theme_scripts' );

function theme_scripts() {
    wp_enqueue_style( 'main', get_stylesheet_uri() );
    wp_enqueue_style( 'theme-style', get_template_directory_uri() . '/assets/style/main.css');
    wp_enqueue_script('theme-script-vendor', get_template_directory_uri() . '/assets/js/vendor.js','', '',true);
    wp_enqueue_script('theme-script-main', get_template_directory_uri() . '/assets/js/main.js','', '',date("h:i:s"));
}

add_theme_support( 'custom-logo');
add_theme_support( 'title-tag');
