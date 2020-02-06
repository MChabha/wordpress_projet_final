<?php
/*
Template Name: Medias template
*/
?><?php get_header(); ?>

<main>
<section class="media">
    <div class="article-medias">
    <?php 
    $args = array( 'post_type' => 'post' );
    $the_query = new WP_Query( $args );

// The Loop
if ( $the_query->have_posts() ) {

    while ( $the_query->have_posts() ) {
        $the_query->the_post();
     ?>

    <h1 class="title"><?php the_title(); ?></h1>

     <article>
     <img class="logo" src="<?php echo get_template_directory_uri();?>/images/image-livres.jpg" alt="image">
        <br><a href="<?php the_permalink(); ?>" rel="tag">Médias</a>
        <p>, </p>
        <a href="<?php the_permalink(); ?>" rel="tag">Actualités</a>
        <h2><?php the_title(); ?></h2>
        <time datetime="2020-01-09"><?php the_date(); ?></time>
        <a class="moreinfo" href="<?php the_permalink(); ?>">Lire la suite</a>
    </article>
     
     <?php 
    }
    /* Restore original Post Data */
    wp_reset_postdata();
} else {
    // no posts found
}?>
    <!-- A dynamiser 
        -->
    


    </div>
</section>

</main>
<?php get_footer(); ?>
</body>
</html>