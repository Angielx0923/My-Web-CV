<?php

/*
Plugin Name: ALM-Technologies
Plugin URI: https://wordpress.org/plugins/health-check/
Description: Plugin qui affiche la taxonomie Technologie
Version: 1.0.0
Author: Angelina Lorieux-Machova
Author URI: https://github.com/Angielx0923
*/

if ( ! defined( 'WPINC' ) ) {
    http_response_code( 403 );
    exit;
}

add_action( 'init', 'alm_technology_taxonomy' );

function alm_technology_taxonomy() {
    register_taxonomy( 'technology',
        'post',
        [
            'labels' => [
                'name'                       => 'Technologies',
                'singular_name'              => 'Technologie',
                'all_items'                  => 'Toutes les technologies',
                'edit_item'                  => 'Editer une technologie',
                'view_item'                  => 'Voir une technologie',
                'update_item'                => 'Mise à jour d\'une technologie',
                'add_new_item'               => 'Ajouter une nouvelle technologie',
                'new_item_name'              => 'Nom de la nouvelle technologie',
                'search_items'               => 'Rechercher des technologies',
                'popular_items'              => 'Technologies populaires',
                'separate_items_with_commas' => 'Séparer les technologies avec une virgule',
                'add_or_remove_items'        => 'Ajouter ou supprimer une technologie',
                'choose_from_most_used'      => 'Choisir une technologie parmi les plus utilisées',
                'not_found'                  => 'Aucune technologie trouvée',
                'back_to_items'              => 'Retour aux technologies'
            ],
            'public'       => true,
            'show_in_rest' => true, // Pour Gutenberg
            'hierarchical' => false
        ]
    );
}

register_activation_hook( __FILE__, 'alm_technology_activation' );

function alm_technology_activation() {
    alm_technology_taxonomy();
    flush_rewrite_rules( false );
}

register_deactivation_hook( __FILE__, 'alm_technology_deactivation' );

function alm_technology_deactivation() {
    unregister_taxonomy( 'technology' );
    flush_rewrite_rules( false );
}