<?php

function jess_theme_style() {

  wp_enqueue_style( 'jess-soledad-parent-style', get_template_directory_uri(). '/style.css' );
  wp_enqueue_style( 'jess-style-css', get_stylesheet_directory_uri(). '/style.css' );
  wp_enqueue_style( 'jess-main-css', get_stylesheet_directory_uri(). '/assets/css/main.css' );

}
add_action( 'wp_enqueue_scripts', 'jess_theme_style' , 100);

function jess_theme_scripts() {

  wp_enqueue_script( 'jess-main-js' , get_stylesheet_directory_uri() . '/assets/js/child-scripts.js' );
}
add_action( 'wp_enqueue_scripts', 'jess_theme_scripts' , 100);


?>
