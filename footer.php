<footer> 
    <div class="footer-items">
        <div>
        <img class="logo_footer" src="<?php echo get_template_directory_uri();?>/images/logo-candidat@2x.png" alt="">
        </div>
        <div class="foot">
        </div>
        <div class="foot">
            <a href="<?php the_permalink(); ?>" rel="tag">Accueil</a><br>
            <a href="<?php the_permalink(); ?>" rel="tag">Actualités</a><br>
            <a href="<?php the_permalink(); ?>" rel="tag">Nos engagements</a><br>
            <a href="<?php the_permalink(); ?>" rel="tag">Au conseil de Paris</a><br>
            <a href="<?php the_permalink(); ?>" rel="tag">Biographie</a><br>
            <a href="<?php the_permalink(); ?>" rel="tag">Sur le terrain</a><br>
            <a href="<?php the_permalink(); ?>" rel="tag">Media</a><br>
            <a href="<?php the_permalink(); ?>" rel="tag">Contactez nous</a><br>
            <a href="<?php the_permalink(); ?>" rel="tag">Tél: 03.80.97.38.61</a><br>
            <a href="<?php the_permalink(); ?>" rel="tag">Contact@yahoo.com</a><br>
        </div>
​

        <div class="network">
            <a href="<?php the_permalink(); ?>"><img class="icon" src="<?php echo get_template_directory_uri();?>/images/FB.svg" alt="image"></a>
            <a href="<?php the_permalink(); ?>"><img class="icon" src="<?php echo get_template_directory_uri();?>/images/TWITTER.svg" alt="image"></a>
            <a href="<?php the_permalink(); ?>"><img class="icon" src="<?php echo get_template_directory_uri();?>/images/LINKEDIN.svg" alt="image"></a>
            <a href="<?php the_permalink(); ?>"><img class="icon" src="<?php echo get_template_directory_uri();?>/images/YOUTUBE.svg" alt="image"></a>

        </div>

        <div class="formula">
            <h2 class="title">Je m’abonne à la Newsletter</h2><br>    
            <form class="form" action="page.html">
                <input class="input-email" type="email" name="email" value= "Enter the email address"> 
                <input class="input-bouton" type="submit" name="submit" value= "Je m'abonne">
            </form>
        </div>
​
</footer> 
<?php wp_footer(); ?>
</body>
</html>


