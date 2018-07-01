<?php

// Get Parent/Top Ancestor ID
function get_top_ancestor_id() {

  global $post;

  if ($post->post_parent) {
    $ancestors = array_reverse(get_post_ancestors( $post->ID ));
    return $ancestors[0];
  }
  return $post->ID;
}