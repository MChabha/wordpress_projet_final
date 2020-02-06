
<body>
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
        </section>
        <section class="content">
        <h1 class="title"><?php the_title(); ?></h1>
        <div class="description">
        <?php the_post_thumbnail( 'hubThumbnail', array('class'=>'card-img-top probootstrap-animate') );?>
            <p class="article"><?php the_content(); ?></p>
            </div>
        <div class="form">
            <form>
              <fieldset>
                <legend><span class="number"></span> Faites votre proposition</legend>
                <input type="text" name="field1" placeholder="Prénom*">
                <input type="text" name="field2" placeholder="Nom*">
                <input type="email" name="field2" placeholder="E-Mail*">
                <textarea name="field3" placeholder="Sujet"></textarea>
                <textarea rows="7" name="field3" placeholder="Votre proposition"></textarea>
              </fieldset>
              <input type="submit" value="Envoyer" />
            </form>
        </div>
    </section>


</main> 
<?php get_footer(); ?>
