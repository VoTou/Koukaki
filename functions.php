<?php
add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );
function theme_enqueue_styles() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'child-style', get_stylesheet_directory_uri() . '/dist/style.css' );
    wp_register_style( 'swiper', 'https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css' );
    wp_enqueue_style('swiper');
}

// Ajout des scripts animation.js, slider.js et la librairie Swiper à la file
function foce_child_scripts() {
	wp_enqueue_script( 'foce-child-animation', get_stylesheet_directory_uri() . '/js/animation.js', array( 'jquery' ), false, true); // Script contenant différentes animations
    wp_enqueue_script( 'swiper-js', 'https://cdnjs.cloudflare.com/ajax/libs/Swiper/3.3.1/js/swiper.min.js', array(), false, true ); // Librairie Swiper.js pour la création de slider
    wp_enqueue_script( 'foce-child-slider', get_stylesheet_directory_uri() . '/js/slider.js', array( 'swiper-js' ), false, true ); // Script qui modifie les paramètres du slider
    wp_enqueue_script( 'skrollr-js', 'https://cdnjs.cloudflare.com/ajax/libs/skrollr/0.6.30/skrollr.min.js', array(), false, true ); // Librairie pour la création d'effet parallaxe
	wp_enqueue_script( 'foce-child-navigation', get_stylesheet_directory_uri() . '/js/navigation.js', array(), false, true ); // Script pour gérer le menu de navigation
} 
add_action( 'wp_enqueue_scripts', 'foce_child_scripts' );


// Get customizer options form parent theme
if ( get_stylesheet() !== get_template() ) {
    add_filter( 'pre_update_option_theme_mods_' . get_stylesheet(), function ( $value, $old_value ) {
        update_option( 'theme_mods_' . get_template(), $value );
        return $old_value; // prevent update to child theme mods
    }, 10, 2 );
    add_filter( 'pre_option_theme_mods_' . get_stylesheet(), function ( $default ) {
        return get_option( 'theme_mods_' . get_template(), $default );
    } );
}
