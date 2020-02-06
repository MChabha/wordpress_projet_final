<?php 
add_action('wp_enqueue_scripts', 'add_aside_styles');
function add_aside_styles(){

    // enregistrement d'un nouveau style
    wp_register_style( 'reset', get_template_directory_uri() . '/css/reset.css' );
    // appel du style dans la page
    wp_enqueue_style( 'reset' );


    // enregistrement d'un nouveau style
    wp_register_style( 'main_style', get_template_directory_uri() . '/css/styles.css' );
    // appel du style dans la page
    wp_enqueue_style( 'main_style' );
    
    
}

add_action( 'after_setup_theme', 'thumbnails_theme_support' );
function thumbnails_theme_support(){
    add_theme_support( 'post-thumbnails' );
}
add_theme_support( 'title-tag' );

add_action('after_setup_theme', 'add_aside_thumbnails_format');
function add_aside_thumbnails_format(){
  add_image_size('home_thumbnail','550','99999',false);
  add_image_size('single_thumbnail','860','575',true);
}