<?php
/**
 * Nagłówek strony.
 *
 * @package WordPress
 * @subpackage Axel
 * @author Reddog Systems <p.bachorek@red-dog.pl>
 */

?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

	<?php get_template_part( 'template-parts/menu', 'skip-links' ); ?>

	<header class="header">
		<?php get_template_part( 'template-parts/site-name' ); ?>
		<?php get_search_form(); ?>
	</header>

	<nav class="navbar top" aria-label="Menu główne">
		<?php get_template_part( 'template-parts/menu', 'header' ); ?>
		<?php get_template_part( 'template-parts/button', 'hamburger' ); ?>
	</nav>
