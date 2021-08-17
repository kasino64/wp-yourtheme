<?php

// Load CSS
function yourtheme_enqueue_styles() {

  wp_enqueue_style( 'main-css', get_stylesheet_directory_uri() . '/assets/css/style.css', [], time(), 'all' );
  wp_enqueue_style( 'unitegallery-css', get_stylesheet_directory_uri() . '/assets/css/unite-gallery.css', [], time(), 'all' );

}
add_action( 'wp_enqueue_scripts', 'yourtheme_enqueue_styles' );

// Load JS
function yourtheme_enqueue_scripts() {

  wp_enqueue_script( 'jquery-js', get_stylesheet_directory_uri() . '/assets/js/unitegallery/jquery-3.6.0.min.js', [], time(), true );
  wp_enqueue_script( 'unitegallery-js', get_stylesheet_directory_uri() . '/assets/js/unitegallery/unitegallery.min.js', [], time(), true );
  wp_enqueue_script( 'ug-theme-tiles', get_stylesheet_directory_uri() . '/assets/js/unitegallery/ug-theme-tiles.js', [], time(), true );
  wp_enqueue_script( 'query-validate', get_stylesheet_directory_uri() . '/assets/js/jquery.validate.min.js', [], time(), true );
  wp_enqueue_script( 'theme-js', get_stylesheet_directory_uri() . '/assets/js/main.js', [], time(), true );
   
}
add_action( 'wp_enqueue_scripts', 'yourtheme_enqueue_scripts' );

?>