<?php

register_nav_menus(array(
'menu' => 'principal'
));
// afficher image à la une
add_theme_support( 'post-thumbnails' );
// fin
function monstyle() {
    wp_enqueue_style( 'style', get_stylesheet_uri() );
    }
    add_action( 'wp_enqueue_scripts', 'monstyle' );

    wp_enqueue_script('progressbar', get_template_directory_uri() . '/javascript/progressbar.js');

    wp_enqueue_style( 'anek',
"https://fonts.googleapis.com/css2?family=Anek+Tamil:wght@100;200;300;400;500;600&display=swap" );

//ajouter une taille à l'image à la une
add_action( 'after_setup_theme', 'wpdocs_theme_setup' );
function wpdocs_theme_setup() {
add_image_size( 'home', 1280, 744, false );
add_image_size( 'blogpage_thumb', 300, 300, false );
add_image_size( 'singleposthumbnail', 500, 500, false );
add_image_size( 'singleposthumbnail2', 500, 500, true );// L'image sera tronquée exactement à la dimension indiquée
add_image_size( 'recentpost-thumb', 200, 200, false );
add_image_size( 'couv', 1536, 1536, false );
}
//fin
function my_function_admin_bar(){ return false; }
add_filter( 'show_admin_bar' , 'my_function_admin_bar');

add_post_type_support( 'page', 'excerpt' );