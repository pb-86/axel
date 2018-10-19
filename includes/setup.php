<?php
/**
 * File comment
 *
 * @package WordPress
 */

/**
 * This action runs after the theme is loaded
 *
 * @link https://codex.wordpress.org/Plugin_API/Action_Reference/after_setup_theme
 */
add_action( 'after_setup_theme', 'axel_setup' );

/**
 * This function runs basic setup of the theme
 */
function axel_setup() {
	/**
	 * Setting the maximum allowed width for any content in the theme
	 *
	 * @link https://codex.wordpress.org/Content_Width
	 */
	if ( ! isset( $content_width ) ) {
		$content_width = 1200;
	}

	/**
	 * This feature enables Post Thumbnails support.
	 *
	 * @link https://developer.wordpress.org/reference/functions/add_theme_support/#post-thumbnails
	 */
	add_theme_support( 'post-thumbnails', array() );

	/**
	 * This feature enables Custom Header support.
	 *
	 * @link https://developer.wordpress.org/reference/functions/add_theme_support/#custom-header
	 */
	add_theme_support( 'custom-header', array() );

	/**
	 * This feature enables Custom Logo support.
	 *
	 * @link https://developer.wordpress.org/reference/functions/add_theme_support/#custom-logo
	 */
	add_theme_support( 'custom-logo', array() );

	/**
	 * This feature allows the use of HTML5 markup.
	 *
	 * @link https://developer.wordpress.org/reference/functions/add_theme_support/#html5
	 */
	add_theme_support( 'html5', array( 'comment-list', 'comment-form', 'search-form', 'gallery', 'caption' ) );

	/**
	 * This feature enables plugins and themes to manage the document title tag.
	 *
	 * @link https://developer.wordpress.org/reference/functions/add_theme_support/#title-tag
	 */
	add_theme_support( 'title-tag' );

	/**
	 * This feature links a custom stylesheet file to the TinyMCE editor
	 *
	 * @link https://codex.wordpress.org/Editor_Style
	 */
	add_editor_style( get_template_directory() . '/assets/css/editor.min.css' );

	/**
	 * Loads the theme's translated strings.
	 *
	 * @link https://codex.wordpress.org/Function_Reference/load_theme_textdomain
	 */
	load_theme_textdomain( 'axel', get_template_directory() . '/language' );
}
