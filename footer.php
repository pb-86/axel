<?php
/**
 * Stopka strony.
 *
 * @package WordPress
 * @subpackage Axel
 * @author Reddog Systems <p.bachorek@red-dog.pl>
 */

?>

	<nav class="navbar bottom" aria-label="Menu w stopce">
		<?php get_template_part( 'template-parts/menu', 'footer' ); ?>
		<?php get_template_part( 'template-parts/button', 'back-to-top' ); ?>
	</nav>

	<footer class="footer">
		<?php get_template_part( 'template-parts/credits' ); ?>
	</footer>

<?php wp_footer(); ?>

<!--   autor: Reddog Systems        -->
<!--  strona: https://red-dog.pl    -->
<!-- kontakt: p.bachorek@red-dog.pl -->
</body>
</html>
