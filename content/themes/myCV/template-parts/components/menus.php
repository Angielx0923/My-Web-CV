<?php

/**
 * Template for the nav menus
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
            'walker'          => new Menus_Walker()
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
            'walker'          => new Menus_Walker()
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
            'walker'          => new Menus_Walker()
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
            'walker'          => new Menus_Walker()
        ]
    );
} else {
    wp_nav_menu(
        [
            'theme_location'  => 'menu-header',
            'container'       => 'nav',
            'container_class' => 'nav',
            'menu_class'      => 'nav__list',
            'walker'          => new Menus_Walker()
        ]
    );
}

class Menus_Walker extends Walker_Nav_Menu {
    function start_lvl( &$output, $depth = 0, $args = array() ) {
        $indent = str_repeat("\t", $depth);
        $output .= "\n$indent<ul class=\"custom-sub-menu\">\n";
    }
}