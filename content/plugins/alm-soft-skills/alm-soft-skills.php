<?php

/*
Plugin Name: ALM-Soft-Skills
Plugin URI: https://wordpress.org/plugins/health-check/
Description: Plugin qui affiche dynamiquement les Soft Skills
Version: 1.0.0
Author: Angelina Lorieux-Machova
Author URI: https://github.com/Angielx0923
*/

if ( ! defined( 'WPINC' ) ) {
    http_response_code( 403 );
    exit;
}

add_action( 'init', 'alm_softskills_cpt' );

function alm_softskills_cpt() {
    register_post_type( 'softskills',
        [
            'labels' => 
            [
                'name'               => 'Soft Skills',
                'add_new_item'       => 'Ajouter une nouvelle skill',
                'edit_item'          => 'Éditer la skill',
                'new_item'           => 'Nouvelle skill',
                'view_item'          => 'Voir la skill',
                'view_items'         => 'Voir les skills',
                'all_items'          => 'Toutes les skills',
            ],
            'public'        => false,
            'show_ui'       => true,
            'hierarchical'  => false,
            'menu_position' => 4,
            'menu_icon'     => 'dashicons-thumbs-up',
            'supports'      => [
                'title',
                'thumbnail'
            ],
            'has_archive'  => false,
            'can_export'   => true,
            'show_in_rest' => true
        ]
    );
}

register_activation_hook( __FILE__, 'alm_softskills_activation' );

function alm_softskills_activation() {
    alm_softskills_cpt();
    flush_rewrite_rules( false );
}

register_deactivation_hook( __FILE__, 'alm_softskills_deactivation' );

function alm_softskills_deactivation() {
    unregister_post_type( 'softskills' );
    flush_rewrite_rules( false );
}