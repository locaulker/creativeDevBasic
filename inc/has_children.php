<?php

// Dose Current Page have Children?
function has_children() {
  global $post;

  $pages = get_pages('child_of=' . $post->ID);
  return count($pages);
  
}