<?php
/*
Template Name: actualites template
*/
?><?php get_header(); ?>

<main>
<section class="media">

    <h1 class="title"><?php the_title(); ?></h1>

    <div class="article-medias">
    <?php 
    $args = array( 'post_type' => 'post' );
    $the_query = new WP_Query( $args );


// The Loop

    if ( $the_query->have_posts() ) {

        while ( $the_query->have_posts() ) {
        $the_query->the_post();
     ?>

        <article>
            <!-- <img class="logo" src="<?php //echo get_template_directory_uri();?>/images/image-livres.jpg" alt="image"> -->
            <?php the_post_thumbnail( 'hubThumbnail', array('class'=>'card-img-top probootstrap-animate') );?>
            
            <div class= "article_content">
                <a href="<?php the_permalink(); ?>" rel="tag">Médias</a>
                <a href="<?php the_permalink(); ?>" rel="tag">Actualités</a>
                <h2><?php the_title(); ?></h2>
                <p><?php the_excerpt() ?></p>
                <br><time datetime="2020-01-09"><?php the_date(); ?></time>
                <a class="moreinfo" href="<?php the_permalink(); ?>">Lire la suite</a>
            </div>

        </article>  
     <?php 
    }
    /* Restore original Post Data */
    wp_reset_postdata();
    } else {
    // no posts found
    }?>


    </div>
</section>

</main>
<?php get_footer(); ?>
