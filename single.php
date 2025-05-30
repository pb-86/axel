<?php
/**
 * Szablon wpisów.
 *
 * @package WordPress
 * @subpackage Axel
 * @author Reddog Systems <p.bachorek@red-dog.pl>
 */

get_header();
?>

<main class="main" id="treść">
	<?php while ( have_posts() ) : ?>
		<?php the_post(); ?>

		<!--Wpis-->
		<article>

			<!--Obrazek wyróżniający-->
			<?php if ( has_post_thumbnail() ) : ?>
				<?php the_post_thumbnail( 'medium' ); ?>
			<?php endif; ?>

			<!--Tytuł wpisu-->
			<h1><?php	the_title(); ?></h1>

			<!--Treść wpisu-->
			<?php the_content( '' ); ?>

		</article>

	<?php endwhile; ?>
</main>

<?php get_footer(); ?>
