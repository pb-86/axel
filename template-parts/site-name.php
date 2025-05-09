<?php
/**
 * Nazwa i opis strony.
 *
 * @package WordPress
 * @subpackage Axel
 * @author Reddog Systems <p.bachorek@red-dog.pl>
 */

$site_title       = get_bloginfo( 'name' );
$site_description = get_bloginfo( 'description' );
?>

<?php if ( is_front_page() || is_home() ) : ?>
	<h1><?php echo esc_html( $site_title ); ?></h1>
<?php else : ?>
	<div><?php echo esc_html( $site_title ); ?></div>
<?php endif; ?>

<p><?php echo esc_html( $site_description ); ?></p>
