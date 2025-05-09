<?php
/**
 * Rejestrowanie menu.
 *
 * @package WordPress
 * @subpackage Axel
 * @author Reddog Systems <p.bachorek@red-dog.pl>
 */

add_action( 'after_setup_theme', 'axel_register_menus' );

/**
 * Rejestruje wszystkie menu na stronie.
 */
function axel_register_menus() {
	$menus = array(
		'axel_menu_header' => __( 'Menu główne', 'axel' ),
		'axel_menu_footer' => __( 'Menu w stopce', 'axel' ),
	);
	register_nav_menus( $menus );
}
