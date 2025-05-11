<?php
// Exit if accessed directly
if ( !defined( 'ABSPATH' ) ) exit;

// BEGIN ENQUEUE PARENT ACTION
// AUTO GENERATED - Do not modify or remove comment markers above or below:





// Récupertation du style.css du thème parent et du thème enfant //

function theme_enfant_css() {
    // Charger le style du thème parent
    wp_enqueue_style( 'astra-theme-css', get_template_directory_uri() . '/style.css' );

    // Charger le style du thème enfant et s'assurer qu'il est chargé après le parent
    wp_enqueue_style( 'theme-enfant', get_stylesheet_directory_uri() . '/style.css', array( 'astra-theme-css' ), '1.0', 'all' );
}

add_action( 'wp_enqueue_scripts', 'theme_enfant_css' );




// Enregistrer le menus desktop et mobile //

function enregistrer_mes_menus(){
    register_nav_menus(array(
        'menu-perso' => 'Menu Perso', 
        'menu-footer-perso'=> 'Menu Footer Perso', 
        'menu-mobile'=>'Menu mobile' 
    )) ;
}

add_action('after_setup_theme', 'enregistrer_mes_menus') ;



// ajout d'une class  <a> de commander du menu  // 

function ajouter_classe_commander_a($atts, $menu_item, $args) {
    if ($menu_item->title == 'Commander') {
        $atts['class'] = 'commander-link'; 
    }
    return $atts;
}

add_filter('nav_menu_link_attributes', 'ajouter_classe_commander_a', 10, 3);


