<?php

load_theme_textdomain( 'axel', get_template_directory() . '/languages' );

add_theme_support( 'post-thumbnails' );
add_theme_support( 'custom-header' );
add_theme_support( 'custom-logo' );
add_theme_support( 'html5' );
add_theme_support( 'title-tag' );

register_nav_menus( array(
  'main'    => __( 'Main menu', 'axel' ),
) );

add_action( 'widgets_init', 'axel_widgets_init' );
function axel_widgets_init() {
  register_sidebar( array(
    'name'          => __( 'Sidebar', 'axel' ),
    'id'            => 'sidebar',
    'before_widget' => '<section>',
    'after_widget'  => '</section>',
    'before_title'  => '<h1>',
    'after_title'   => '</h1>',
  ));
}
