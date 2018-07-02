<?php

// Theme Setup
function creativeDevBasic_setup() {

  // Register Navigation Menus
  register_nav_menus(array(
    'primary'   =>    __( 'Primary Menu' ),
    'footer'    =>    __( 'Footer Menu' )
  ));

  // Add Featured Image Support
  add_theme_support('post-thumbnails');

    // Add Image Sizes
    add_image_size('small-thumbnail', 180, 120, true);
    add_image_size('banner-image', 920, 310, array('top', 'left'));
}
add_action('after_setup_theme', 'creativeDevBasic_setup');