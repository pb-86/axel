<?php
/**
 * Wyszukiwarka.
 *
 * @package WordPress
 * @subpackage Axel
 * @author Reddog Systems <p.bachorek@red-dog.pl>
 */

?>

<search class="search">
	<form id="wyszukiwarka" action="<?php echo esc_url( home_url( '/' ) ); ?>" method="get">
		<label class="screen-reader-text" for="search"><?php esc_html_e( 'Wyszukaj na stronie', 'axel' ); ?></label>
		<input type="search" name="s" id="search" value="<?php echo get_search_query(); ?>">
		<button type="submit"><?php esc_html_e( 'Szukaj', 'axel' ); ?></button>
	</form>
</search>