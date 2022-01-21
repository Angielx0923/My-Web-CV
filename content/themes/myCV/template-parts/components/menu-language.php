<?php 
/**
 * Template for the language switch menu
 * 
 * @package ALM
 */

// Allow to modify the name of the sub-menu UL class
class Language_Menu_Walker extends Walker_Nav_Menu {
    function start_lvl( &$output, $depth = 0, $args = array() ) {
        $indent = str_repeat("\t", $depth);
        $output .= "\n$indent<ul class=\"language-sub-menu\">\n";
    }
}

// LANGUAGES MENU
wp_nav_menu(
    [
        'theme_location'  => 'menu-language',
        'container'       => 'nav',
        'container_class' => 'languages-nav',
        'menu_class'      => 'languages-nav__button',
        'walker'          => new Language_Menu_Walker()
    ]
);

