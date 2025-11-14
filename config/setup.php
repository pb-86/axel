<?php
/**
 * Główna konfiguracja motywu.
 *
 * @package WordPress
 * @subpackage Axel
 * @author Reddog Systems <p.bachorek@red-dog.pl>
 */

add_action( 'after_setup_theme', 'setup_site_theme' );

/**
 * Konfiguruje motyw.
 */
function setup_site_theme() {
	// Włącza obsługę miniaturek.
	add_theme_support( 'post-thumbnails' );

	// Pozwala na używanie znaczników z HTML5.
	add_theme_support( 'html5', array( 'comment-list', 'comment-form', 'search-form', 'gallery', 'caption', 'style', 'script', 'navigation-widgets' ) );

	// Pozwala wtyczkom na zarządzanie tytułem.
	add_theme_support( 'title-tag' );

	// Ładuje pliki z tłumaczeniami.
	load_theme_textdomain( 'axel', get_template_directory_uri() . '/languages' );
}
