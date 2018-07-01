<?php

// Enqueue Styles and Scripts
// require "inc/enqueue.php"; OR
require get_template_directory() . '/inc/enqueue.php';

// Register Navigation Menus
// require "inc/nav_menus.php"; OR
require get_template_directory() . '/inc/nav_menus.php';

// Dose Current Page have Children?
require get_template_directory() . '/inc/has_children.php';

// get Top Ancestors ID
require get_template_directory() . '/inc/top_ancestor_id.php';