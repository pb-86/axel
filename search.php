<?php
/**
 * Wyniki wyszukiwania.
 *
 * @package WordPress
 * @subpackage Axel
 * @author Reddog Systems <p.bachorek@red-dog.pl>
 */

get_header();
?>

<main class="main" id="main" tabindex="-1">
	<!--Tytuł-->
	<h1>Wyniki wyszukiwania</h1>
	<div>Szukałeś: <?php echo get_search_query(); ?></div>

	<!--Pętla wpisów-->
	<?php if ( have_posts() ) : ?>
		<?php while ( have_posts() ) : ?>
			<?php the_post(); ?>

			<!--Wpis-->
			<?php get_template_part( 'template-parts/excerpt' ); ?>

		<?php endwhile; ?>

		<!--Stronicowanie wpisów-->
		<?php the_posts_pagination(); ?>
	<?php endif; ?>
</main>

<?php get_footer(); ?>
