<?php
// Pour gérer le contenu woo-commerce:
function mytheme_add_woocommerce_support() {
  add_theme_support( 'woocommerce' );
}
add_action( 'after_setup_theme', 'mytheme_add_woocommerce_support' );
// Pour reset le style woo-commerce:
add_filter( 'woocommerce_enqueue_styles', '__return_empty_array' );

function my_custom_style() {
    wp_enqueue_style( 'fontawesome_css', get_stylesheet_directory_uri() . '/node_modules/@fortawesome/fontawesome-free/css/all.min.css' );
    wp_enqueue_style( 'my_style', get_stylesheet_uri() );
}
add_action('wp_enqueue_scripts', 'my_custom_style');


function my_custom_scripts() {
    wp_enqueue_script( 'jQuery_3', get_stylesheet_directory_uri() . '/node_modules/jquery/dist/jquery.min.js');
    wp_enqueue_script( 'fontawesome_js', get_stylesheet_directory_uri() . '/node_modules/@fortawesome/fontawesome-free/js/all.min.js');
    wp_enqueue_script( 'my_script', get_stylesheet_directory_uri() . '/assets/js/script.js');
}
add_action('wp_enqueue_scripts', 'my_custom_scripts');
