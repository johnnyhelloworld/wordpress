<?php

// Déclaration des emplacements de menu
add_action('init', 'esgi_init');
function esgi_init() {
	register_nav_menus([
        'primary_menu' => __('Menu principal', 'ESGI')
    ]);
}

// Ajout des supports de thème
add_action('after_setup_theme','esgi_after_setup_theme');
function esgi_after_setup_theme(){
	add_theme_support('custom-logo');
}

// Chargement de la feuille de style
add_action('wp_enqueue_scripts', 'esgi_enqueue_assets');
function esgi_enqueue_assets(){
	wp_enqueue_style('main', get_stylesheet_uri());
}