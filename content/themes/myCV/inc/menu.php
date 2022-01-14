<?php
/**
 * Menu Configuration
 * 
 * @package ALM
 */

add_action(
	'after_setup_theme',
	'alm_register_nav_menus'
);

function alm_register_nav_menus() {
	register_nav_menus(
    [
        'menu-header'    => 'Menu principal',
        'menu-portfolio' => 'Menu portfolio',
        'menu-contact' => 'Menu Hire Me'
    ]);
}

add_filter( 'nav_menu_css_class', 'alm_list_item_class' );

function alm_list_item_class( $class ) {
    $class[] = 'nav__list__item';
    return $class;
}

add_filter( 'nav_menu_link_attributes', 'alm_custom_nav_attributes' );

function alm_custom_nav_attributes ( $atts ) {
    $atts['data-scroll'] = 'true';
    return $atts;
}

add_filter( 'nav_menu_link_attributes', 'alm_custom_nav_class' );

function alm_custom_nav_class ( $linkClass ) {
    $linkClass['class'] = 'nav__list__item__link';
    return $linkClass;
}
