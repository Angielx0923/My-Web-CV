<?php

/*
Plugin Name: ALM-Portfolio
Plugin URI: https://wordpress.org/plugins/health-check/
Description: Plugin qui affiche dynamiquement mon portfolio
Version: 1.0.0
Author: Angelina Lorieux-Machova
Author URI: https://github.com/Angielx0923
*/

if ( ! defined( 'WPINC' ) ) {
    http_response_code( 403 );
    exit;
}

add_action( 'init', 'alm_portfolio_cpt' );

function alm_portfolio_cpt() {
    register_post_type( 'portfolio',
        [
            'labels' => 
            [
                'name'               => 'Portfolio',
                'add_new_item'       => 'Ajouter un nouveau projet',
                'edit_item'          => 'Éditer le projet',
                'new_item'           => 'Nouveau projet',
                'view_item'          => 'Voir le projet',
                'view_items'         => 'Voir les projets',
                'search_items'       => 'Rechercher des projets',
                'not_found'          => 'Aucun projet trouvé',
                'not_found_in_trash' => 'Aucun projet trouvé dans la corbeille',
                'all_items'          => 'Tous les projets',
                'archives'           => 'Archive des projets'
            ],
            'public'        => false,
            'show_ui'       => true,
            'hierarchical'  => false,
            'menu_position' => 9,
            'menu_icon'     => 'dashicons-portfolio',
            'supports'      => [
                'title',
                'editor',
                'thumbnail',
                'custom-fields',
                'page-attributes'
            ],
            'has_archive'  => true,
            'can_export'   => true,
            'show_in_rest' => true
        ]
    );
}

register_activation_hook( __FILE__, 'alm_portfolio_activation' );

function alm_portfolio_activation() {
    alm_portfolio_cpt();
    flush_rewrite_rules( false );
}

register_deactivation_hook( __FILE__, 'alm_portfolio_deactivation' );

function alm_portfolio_deactivation() {
    unregister_post_type( 'portfolio' );
    flush_rewrite_rules( false );
}