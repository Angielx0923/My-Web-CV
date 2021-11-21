<?php

/*
Plugin Name: ALM-Parcours
Plugin URI: https://wordpress.org/plugins/health-check/
Description: Plugin qui affiche dynamiquement mon parcours professionnel
Version: 1.0.0
Author: Angelina Lorieux-Machova
Author URI: https://github.com/Angielx0923
*/

if ( ! defined( 'WPINC' ) ) {
    http_response_code( 403 );
    exit;
}

add_action( 'init', 'alm_experience_cpt' );

function alm_experience_cpt() {
    register_post_type( 'experience',
        [
            'labels' => 
            [
                'name'               => 'Parours Pro',
                'add_new_item'       => 'Ajouter un nouveau texte',
                'edit_item'          => 'Éditer le texte',
                'new_item'           => 'Nouveau texte',
                'view_item'          => 'Voir le texte',
                'view_items'         => 'Voir les textes',
                'all_items'          => 'Tous les textes',
            ],
            'public'        => false,
            'show_ui'       => true,
            'hierarchical'  => false,
            'menu_position' => 9,
            'menu_icon'     => 'dashicons-chart-line',
            'supports'      => [
                'title',
                'editor',
                'custom-fields',
            ],
            'has_archive'  => false,
            'can_export'   => true,
            'show_in_rest' => true
        ]
    );
}

register_activation_hook( __FILE__, 'alm_experience_activation' );

function alm_experience_activation() {
    alm_experience_cpt();
    flush_rewrite_rules( false );
}

register_deactivation_hook( __FILE__, 'alm_experience_deactivation' );

function alm_experience_deactivation() {
    unregister_post_type( 'experience' );
    flush_rewrite_rules( false );
}