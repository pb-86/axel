<?php
/**
 * Szablon skrótu wpisu.
 *
 * @package WordPress
 * @subpackage Axel
 * @author Reddog Systems <p.bachorek@red-dog.pl>
 */

?>

<article class="excerpt">

	<!--Tytuł wpisu-->
	<h2>
		<a href="<?php the_permalink(); ?>">
			<?php	the_title(); ?>
		</a>
	</h2>

	<!--Obrazek wyróżniający-->
	<?php if ( has_post_thumbnail() ) : ?>
		<a href="<?php the_permalink(); ?>" aria-hidden="true" tabindex="-1">
			<?php the_post_thumbnail( 'thumbnail', array( 'alt' => get_the_title() ) ); ?>
		</a>
	<?php endif; ?>

	<!--Treść wpisu-->
	<?php the_content( '' ); ?>

	<!--Czytaj dalej-->
	<a href="<?php the_permalink(); ?>" aria-hidden="true" tabindex="-1">
		Czytaj dalej
		<span class="screen-reader-text">
			<?php the_title(); ?>
		</span>
	</a>

</article>