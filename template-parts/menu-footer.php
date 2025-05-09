<?php
/**
 * Menu w stopce.
 *
 * @package WordPress
 * @subpackage Axel
 * @author Reddog Systems <p.bachorek@red-dog.pl>
 */

$args = array(
	'container'      => '',
	'menu'           => 'axel_menu_footer',
	'menu_id'        => 'menu-w-stopce',
	'menu_class'     => 'menu bottom',
	'theme_location' => 'axel_menu_footer',
);

wp_nav_menu( $args );
