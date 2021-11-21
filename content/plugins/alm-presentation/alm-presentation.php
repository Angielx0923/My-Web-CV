<?php

/*
Plugin Name: ALM-Presentation
Plugin URI: https://wordpress.org/plugins/health-check/
Description: Plugin qui affiche dynamiquement l'article de présentation
Version: 1.0.0
Author: Angelina Lorieux-Machova
Author URI: https://github.com/Angielx0923
*/

if ( ! defined( 'WPINC' ) ) {
    http_response_code( 403 );
    exit;
}

add_action( 'init', 'alm_presentation_cpt' );

function alm_presentation_cpt() {
    register_post_type( 'presentation',
        [
            'labels' => 
            [
                'name'               => 'Présentation',
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
            'menu_position' => 2,
            'menu_icon'     => 'dashicons-smiley',
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

register_activation_hook( __FILE__, 'alm_presentation_activation' );

function alm_presentation_activation() {
    alm_presentation_cpt();
    flush_rewrite_rules( false );
}

register_deactivation_hook( __FILE__, 'alm_presentation_deactivation' );

function alm_presentation_deactivation() {
    unregister_post_type( 'presentation' );
    flush_rewrite_rules( false );
}