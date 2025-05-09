<?php
/**
 * Główne ustawienia motywu.
 *
 * @package WordPress
 * @subpackage Axel
 * @author Reddog Systems <p.bachorek@red-dog.pl>
 */

// Podstawowe stałe używane w całym motywie.
define( 'AXEL_VERSION', wp_get_theme()->get( 'Version' ) );
define( 'AXEL_CONFIG', '/config' );
define( 'AXEL_IMAGES', get_template_directory_uri() . '/assets/images/' );
define( 'AXEL_VENDOR', get_template_directory_uri() . '/assets/vendor/' );

// Podłączanie plików z dodatkowymi ustawieniami motywu.
require_once get_template_directory() . AXEL_CONFIG . '/setup.php';
require_once get_template_directory() . AXEL_CONFIG . '/menus.php';
require_once get_template_directory() . AXEL_CONFIG . '/styles.php';
require_once get_template_directory() . AXEL_CONFIG . '/scripts.php';
require_once get_template_directory() . AXEL_CONFIG . '/optimization.php';
