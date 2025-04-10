<?php
/**
 * The header for Astra Theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Astra
 * @since 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly.
}

?><!DOCTYPE html>
<?php astra_html_before(); ?>
<html <?php language_attributes(); ?>>
<head>
    <?php astra_head_top(); ?>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
   



    <?php wp_head(); ?>
    <?php astra_head_bottom(); ?>
</head>

<body <?php astra_schema_body(); ?> <?php body_class(); ?>>
<?php astra_body_top(); ?>
<?php wp_body_open(); ?>

<header>
    <div class="container-header">
        <!-- Logo -->
        <div class="container-logo">
            <?php the_custom_logo(); ?>
        </div>

        <!-- Menu Principal -->
        <?php 
        // Ajouter un lien "Admin" au menu principal si l'utilisateur est connecté
        function ajouter_lien_admin($items, $args) {
            if (is_user_logged_in() && in_array($args->theme_location, ['menu-perso', 'menu-mobile'])) {
                $admin_lien = '<li><a class="admin-link" href="' . admin_url() . '">Admin</a></li>';
        
                // Ajouter le lien Admin après le premier élément du menu
                $items_tableau = explode('</li>', $items);
                $items_tableau = array_filter($items_tableau);
                array_splice($items_tableau, 1, 0, $admin_lien);
                $items = implode('</li>', $items_tableau) . '</li>';
            }
            return $items;
        }
        
        add_filter('wp_nav_menu_items', 'ajouter_lien_admin', 10, 2);

        // Affichage du menu personnalisé
        ?>

        
        
            <?php
        wp_nav_menu(array(
            'theme_location' => 'menu-perso',
            'container' => 'nav',
            
            'fallback_cb' => false,

        ));
        
        ?>
        

        <!-- Menu mobile -->
        
           

            <?php
            wp_nav_menu(array(
                'theme_location' => 'menu-mobile',
                'container' => 'nav',
                'fallback_cb' => false,
                
            ));
            ?>
        
    </div>
</header>



