<?php
/**
 * This file loads all theme setup files
 *
 * @package WordPress
 * @subpackage Axel
 * @version 0.8.1
 */

define( 'AXEL_THEME_VERSION', '0.8.1' );

require_once 'includes/setup.php';    // Basic theme setup.
require_once 'includes/menus.php';    // Registering menus.
require_once 'includes/sidebars.php'; // Registering sidebar.
require_once 'includes/styles.php';   // Registering CSS styles.
require_once 'includes/scripts.php';  // Registering JS scripts.
