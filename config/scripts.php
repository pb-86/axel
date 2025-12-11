<?php
/**
 * Ustawienia dotyczące arkuszy skryptów JS.
 *
 * @package WordPress
 * @subpackage Axel
 * @author Reddog Systems <p.bachorek@red-dog.pl>
 */

/**
 * Stała zawierająca adres folderu, w którym znajdują się skrrypty JS.
 */
define( 'THEME_SCRIPTS_DIR', get_stylesheet_directory_uri() . '/assets/scripts/' );

/**
 * Ładuje zadane skrypty JS.
 */
function get_theme_scripts() {
	wp_enqueue_script( 'master', esc_url( THEME_SCRIPTS_DIR . 'master.min.js' ), array(), THEME_VERSION, true );
}
add_action( 'wp_enqueue_scripts', 'get_theme_scripts' );
