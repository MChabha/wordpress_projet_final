<?php
add_action('after_setup_theme', 'aside_add_thumbnail_support');
function aside_add_thumbnail_support()
{
  add_theme_support( 'post-thumbnails' );
  add_image_size( 'hubThumbnail', 640, 1000, false );
}
