<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- Appel du fichier style.css de notre thème -->
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">

    <title>ZaZa Condidate au municipale</title>
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?> >
<header>
  <!--  
    <ul>
        <li><a href="#">Acceuil</a></li>
        <li><a href="#">Actualité</a></li>
        <li><a href="#">Nos engagements</a></li>
        <li><a href="#">Au conseil de Paris</a></li>
        <li><a href="#">Bilan de mandat</a></li>
        <li><a href="#">Biographie</a></li>
        <li><a href="#">Contactez moi</a></li>
    </ul>-->

    <img class="logo" src="<?php echo get_template_directory_uri();?>/images/logo-candidat@2x.png" alt="image">

    <?php // SYNTAXE : wp_nav_menu( array $args = array() )
$args=array(
    'theme_location' => 'header', // nom du slug
    'menu' => 'header_fr', // nom à donner cette occurence du menu
    'menu_class' => 'menu_header', // class à attribuer au menu
    'menu_id' => 'menu_id' // id à attribuer au menu
    // voir les autres arguments possibles sur le codex
);
wp_nav_menu($args);
?>
</header>
<img class="imgslider" src="<?php echo get_template_directory_uri();?> /images/img_header1.png" alt=""> 
