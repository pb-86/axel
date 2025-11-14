<?php
/**
 * Główne ustawienia motywu.
 *
 * @package WordPress
 * @subpackage Axel
 * @author Reddog Systems <p.bachorek@red-dog.pl>
 */

// Podstawowe stałe używane w całym motywie.
define( 'SITE_VERSION', wp_get_theme()->get( 'Version' ) );
define( 'SITE_CONFIG', '/config' );
define( 'SITE_IMAGES', get_template_directory_uri() . '/assets/images/' );
define( 'SITE_VENDOR', get_template_directory_uri() . '/assets/vendor/' );

// Podłączanie plików z dodatkowymi ustawieniami motywu.
require_once get_template_directory() . SITE_CONFIG . '/setup.php';
require_once get_template_directory() . SITE_CONFIG . '/menus.php';
require_once get_template_directory() . SITE_CONFIG . '/styles.php';
require_once get_template_directory() . SITE_CONFIG . '/scripts.php';
require_once get_template_directory() . SITE_CONFIG . '/optimization.php';
