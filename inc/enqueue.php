<?php

// wp_enqueue styles and scripts
function creativeDevBasic_assets() {
  wp_enqueue_style( 'normalize', get_template_directory_uri() . '/assets/vendor/normalize.css');
  wp_enqueue_style( 'style', get_template_directory_uri() . '/assets/css/style.css');
}
add_action( 'wp_enqueue_scripts', 'creativeDevBasic_assets' );




