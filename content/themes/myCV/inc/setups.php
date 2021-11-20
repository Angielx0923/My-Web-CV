<?php 

function alm_setup() {
    add_theme_support( 'title-tag' );
    add_theme_support( 'post-thumbnails' );
    add_theme_support( 'custom-logo' );
}

add_action( 'after_setup_theme', 'alm_setup' );