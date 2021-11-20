<?php

function alm_enqueue_scripts() {
    wp_enqueue_style( 
        'alm-style',
        get_theme_file_uri( 'public/css/style.css' )
    );

    // APP.JS
    wp_enqueue_script( 
        'alm-script',
        get_theme_file_uri( 'public/js/app.js' ),
        [],
        false,
        true
    );
}

add_action( 'wp_enqueue_scripts', 'alm_enqueue_scripts' );

