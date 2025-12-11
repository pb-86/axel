<?php
/**
 * Ustawienia dotyczące arkuszy stylów CSS.
 *
 * @package WordPress
 * @subpackage Axel
 * @author Reddog Systems <p.bachorek@red-dog.pl>
 */

/**
 * Stała zawierająca adres folderu, w którym znajdują się arkusze stylów CSS.
 */
define( 'THEME_STYLES_DIR', get_stylesheet_directory_uri() . '/assets/styles/' );

/**
 * Ładuje zadane arkusze stylów.
 */
function get_theme_styles() {
	wp_enqueue_style( 'master', esc_url( THEME_STYLES_DIR . 'master.min.css' ), array(), THEME_VERSION, 'all' );
}
add_action( 'wp_enqueue_scripts', 'get_theme_styles' );
