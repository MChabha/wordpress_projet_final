<?php
/*
Template Name: Biographie template
*/
?>
<?php get_header(); ?>
<main>

<section class="content">
<?php
// The Query
$the_query = new WP_Query( $args );

// The Loop
if ( $the_query->have_posts() ) {
    
    while ( $the_query->have_posts() ) {
        $the_query->the_post();
        ?>

        <div class="description">
        </div>
   <?php }
    
    /* Restore original Post Data */
    wp_reset_postdata();
} else {
    // no posts found
}
?>


        <h1 class="title"><?php the_title(); ?></h1>
        <div class="description">
        <?php the_post_thumbnail( 'hubThumbnail', array('class'=>'card-img-top probootstrap-animate') );?>
            <p class="article"><?php the_content(); ?></p>
        </div>
      </section>



    </main>
    <?php get_footer(); ?>