<?php 

define( 'THEME_PATH' ,          get_template_directory()            );
//define( 'TEMPLATE_PATH' ,       THEME_PATH .    '/templates'        );

define( 'THEME_URL' ,           get_template_directory_uri()        );
define( 'CSS_URL' ,             THEME_URL .    '/css'       );
define( 'IMAGES_URL' ,          THEME_URL .    '/images'       );
define( 'JS_URL' ,              THEME_URL .    '/scripts'      );
//define( 'FAVICONS_URL' ,        THEME_URL .    '/dist/favicon'      );
//define( 'ADMIN_IMAGES_URL' ,    IMAGES_URL .   '/admin'             );


foreach ( glob( THEME_PATH . "/inc/*.php" ) as $file ) {
    include_once $file;
}

//SYNTAXE register_nav_menu( 'slug', 'Titre à afficher dans le BO' )

add_action( 'after_setup_theme', 'menus_du_themes' );
function menus_du_themes() {
  register_nav_menu( 'header', 'Menu entête' );
  register_nav_menu( 'footer', 'Menu bas de page' );
  register_nav_menu( 'topBar', 'Menu top Bar' );
}



// script video wordpress

// function lgmac_scripts(){
// //   wp_enqueue_script('lgmac_boostrap-core', get_template_directory_uri(). '/js/candidat.js', array('lgmac_bootstrap-core')
// //  LGMAC_VERSION, 'all');

// wp_enqueue_script('lgmac_boostrap-core', get_template_directory_uri(). '/js/candidat.js', array()
// , 'false');
// }

?>