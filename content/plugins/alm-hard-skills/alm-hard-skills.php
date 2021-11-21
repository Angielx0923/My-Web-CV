<?php

/*
Plugin Name: ALM-Hard-Skills
Plugin URI: https://wordpress.org/plugins/health-check/
Description: Plugin qui affiche dynamiquement les Hard Skills
Version: 1.0.0
Author: Angelina Lorieux-Machova
Author URI: https://github.com/Angielx0923
*/

if ( ! defined( 'WPINC' ) ) {
    http_response_code( 403 );
    exit;
}

add_action( 'init', 'alm_hardskills_cpt' );

function alm_hardskills_cpt() {
    register_post_type( 'hardskills',
        [
            'labels' => 
            [
                'name'               => 'Hard Skills',
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
            'menu_icon'     => 'dashicons-html',
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

register_activation_hook( __FILE__, 'alm_hardskills_activation' );

function alm_hardskills_activation() {
    alm_hardskills_cpt();
    flush_rewrite_rules( false );
}

register_deactivation_hook( __FILE__, 'alm_hardskills_deactivation' );

function alm_hardskills_deactivation() {
    unregister_post_type( 'hardskills' );
    flush_rewrite_rules( false );
}