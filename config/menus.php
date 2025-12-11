<?php
/**
 * Rejestrowanie menu.
 *
 * @package WordPress
 * @subpackage Axel
 * @author Reddog Systems <p.bachorek@red-dog.pl>
 */

add_action( 'after_setup_theme', 'register_site_menus' );

/**
 * Rejestruje wszystkie menu na stronie.
 */
function register_site_menus() {
	$menus = array(
		'menu_header' => esc_html( __( 'Menu główne', 'axel' ) ),
		'menu_footer' => esc_html( __( 'Menu w stopce', 'axel' ) ),
	);
	register_nav_menus( $menus );
}
