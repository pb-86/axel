<?php
/**
 * Główne ustawienia motywu.
 *
 * @package WordPress
 * @subpackage Axel
 * @author Reddog Systems <p.bachorek@red-dog.pl>
 */

// Podstawowe stałe używane w całym motywie.
define( 'THEME_VERSION', wp_get_theme()->get( 'Version' ) );
define( 'THEME_CONFIG_DIR', '/config/' );
define( 'THEME_IMAGES_DIR', get_template_directory_uri() . '/assets/images/' );
define( 'THEME_VENDOR_DIR', get_template_directory_uri() . '/assets/vendor/' );

// Podłączanie plików z dodatkowymi ustawieniami motywu.
require_once get_template_directory() . THEME_CONFIG_DIR . 'setup.php';
require_once get_template_directory() . THEME_CONFIG_DIR . 'menus.php';
require_once get_template_directory() . THEME_CONFIG_DIR . 'styles.php';
require_once get_template_directory() . THEME_CONFIG_DIR . 'scripts.php';
require_once get_template_directory() . THEME_CONFIG_DIR . 'optimization.php';
