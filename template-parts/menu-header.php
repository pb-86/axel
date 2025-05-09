<?php
/**
 * Główne menu.
 *
 * @package WordPress
 * @subpackage Axel
 * @author Reddog Systems <p.bachorek@red-dog.pl>
 */

$args = array(
	'container'      => '',
	'menu'           => 'axel_menu_header',
	'menu_id'        => 'menu-główne',
	'menu_class'     => 'menu bottom',
	'theme_location' => 'axel_menu_header',
);

wp_nav_menu( $args );
