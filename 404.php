<?php
/**
 * The template for displaying 404 pages
 *
 * @package WordPress
 * @subpackage Axel
 * @version 1.19
 */

get_header();
?>

<main class="axel-main" id="axel-main" tabindex="-1">
	<h2>
		<?php esc_html_e( "Page can't be found", 'axel' ); ?>
	</h2>
	<?php
	esc_html_e( "Sorry, but we couldn't find the page you were looking for. Try to search.", 'axel' );
	get_search_form();
	?>
</main>

<aside class="axel-sidebar">
	<?php get_sidebar(); ?>
</aside>

<?php get_footer(); ?>
