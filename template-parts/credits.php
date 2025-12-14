<?php
/**
 * Oznaczenie wykonawcy i data wykonania strony.
 *
 * @package WordPress
 * @subpackage Axel
 * @author Reddog Systems <p.bachorek@red-dog.pl>
 */

$built_year  = '2025';
$author_name = 'Reddog Systems';
$author_url  = 'https://red-dog.pl/?source=WEBSITE-SLUG';

printf(
	/* translators: %1$s = author URL, %2$s = author name, %3$s = year site was built */
	wp_kses_post( __( 'Strona zaprojektowana i wykonana przez <a href="%1$s">%2$s</a>, %3$s', 'axel' ) ),
	esc_url( $author_url ),
	esc_html( $author_name ),
	esc_html( $built_year )
);
