<?php 

function alm_setup() {
    add_theme_support( 'title-tag' );
    add_theme_support( 'post-thumbnails' );
    add_theme_support( 'custom-logo' );
}

add_action( 'after_setup_theme', 'alm_setup' );

// Allow SVG files
// https://wpchannel.com/wordpress/tutoriels-wordpress/autoriser-envoi-fichiers-svg-wordpress/
function wpc_mime_types($mimes) {
	$mimes['svg'] = 'image/svg+xml';
	return $mimes;
}
add_filter('upload_mimes', 'wpc_mime_types');