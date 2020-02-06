<?php
/*
Template Name: l'équipe template
*/
?><?php get_header(); ?>

<main>

    <h1 class="title"><?php the_title(); ?></h1>

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



    <!-- <section class="Second">
        <article class="review">
            <div class="first-line">
                <div class="picture">
                  <img class="thumbnail" src="images/imageAFEF.png" alt="">
                </div>
                <div class="name">
                    <p> Afef ZRIBI</p>
                </div>
            </div>
            <div class="date">
                <p><strong> Date de naissance</strong> : 25 octobre 1983 </p>
            </div>
            <br>
            <div class="description">
                <p><strong>Métier</strong> : Vice-Présidente </p>
                <p><strong>Pays </strong>: France</p>
                <p><strong> Intérêts</strong> : Ecologie, Sport & Music </p>
            </div>
        </article>
    
        <article class="review">
            <div class="first-line">
                <div class="picture">
                  <img class="thumbnail" src="images/imageSALI.png" alt="">
                </div>
                <div class="name">
                    <p> Salimata KONE</p>
                </div>
            </div>
            <div class="date">
                <p><strong> Date de naissance</strong> : 18 Février 1977 </p>
            </div>
            <br>
            <div class="description">
                <p><strong>Métier</strong> : Conseillère d'administration </p>
                <p><strong>Pays </strong>: France</p>
                <p><strong> Intérêts</strong> : Ecologie, Sport & Music </p>
            </div>
        </article>
    
        
    
        <article class="review">
            <div class="first-line">
                <div class="picture">
                  <img class="thumbnail" src="images/imageCHAHBA.png" alt="">
                </div>
                <div class="name">
                    <p>Chabha MAHFOUFI</p>
                </div>
            </div>
            <div class="date">
                <p><strong> Date de naissance</strong> : 18 juin 1987 </p>
            </div>
            <br>
            <div class="description">
                <p><strong>Métier</strong> : Secrétaire général </p>
                <p><strong>Pays </strong>: France</p>
                <p><strong> Intérêts</strong> : Ecologie, Sport & Music </p>
            </div>
        </article> -->
    

    </section>

    </main>
<?php get_footer(); ?>
</body>
</html>