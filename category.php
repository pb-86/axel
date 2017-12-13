<?php get_header(); ?>

<main>
  <header>
    <h1><?php single_cat_title(); ?></h1>
  </header>
  <?php
    if( have_posts() ) :
      while( have_posts() ) : the_post();
        get_template_part( 'template-parts/post/content' );
      endwhile;
    endif;
  ?>
</main>

<?php get_sidebar(); ?>

<?php get_footer(); ?>
