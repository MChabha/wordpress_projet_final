<?php
/*
Template Name: contacts template
*/

?>
  <?php get_header(); ?>

  <main>
  <h1 class="title"><?php the_title(); ?></h1>

  <?php 
  if ( have_posts() ) :
    while ( have_posts() ) : the_post();
    
  
    
    endwhile;
  else :
    _e( 'Sorry, no posts were found.', 'textdomain' );
  endif;

  the_content();
  //
  ?>
</main>

<?php get_footer(); ?>