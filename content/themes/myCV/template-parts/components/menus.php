<?php

/**
 * Template for all the menus
 * 
 * @package ALM
 */

if ( is_single() ) {
    wp_nav_menu(
        [
            'theme_location'  => 'menu-portfolio',
            'container'       => 'nav',
            'container_class' => 'nav',
            'menu_class'      => 'nav__list',
        ]
    );
}
elseif ( is_page( 'contact' ) ) {
    wp_nav_menu(
        [
            'theme_location'  => 'menu-contact',
            'container'       => 'nav',
            'container_class' => 'nav',
            'menu_class'      => 'nav__list',
        ]
    );
}
elseif ( is_404() ) {
    wp_nav_menu(
        [
            'theme_location'  => 'menu-error',
            'container'       => 'nav',
            'container_class' => 'nav',
            'menu_class'      => 'nav__list',
        ]
    );
}
elseif ( is_page_template( 'archive.php' ) ) {
    wp_nav_menu(
        [
            'theme_location'  => 'menu-archive',
            'container'       => 'nav',
            'container_class' => 'nav',
            'menu_class'      => 'nav__list',
        ]
    );
} else {
    wp_nav_menu(
        [
            'theme_location'  => 'menu-header',
            'container'       => 'nav',
            'container_class' => 'nav',
            'menu_class'      => 'nav__list',
        ]
    );
}