<?php

// Enqueue Styles and Scripts
// require "inc/enqueue.php"; OR
require get_template_directory() . '/inc/enqueue.php';

/* Add Theme Support
  -01 Register Navigation Menus
  -02 Add Featured Image Support
*/
require get_template_directory() . '/inc/theme-support.php';

// Dose Current Page have Children?
require get_template_directory() . '/inc/has_children.php';

// get Top Ancestors ID
require get_template_directory() . '/inc/top_ancestor_id.php';

// Custom Excerpt wor count Length
require get_template_directory() . '/inc/custom_excerpt_length.php';