<?php

// Add Widget Locations
function cdevtheme_widgetsInit() {
  register_sidebar(array(
    'name'    =>  'Sidebar',
    'id'      =>  'sidebar1',
    'before_widget' =>  '<div class="widget-item">',
    'after_widget'  =>  '</div>',
    'before_title'  =>  '<h4 class="sidebar-class">',
    'after_title'  =>  '</h4>'
  ));

  register_sidebar(array(
    'name'    =>  'Footer Area 1',
    'id'      =>  'footer1',
    'before_widget' =>  '<div class="widget-item">',
    'after_widget'  =>  '</div>',
    'before_title'  =>  '<h4 class="sidebar-class">',
    'after_title'  =>  '</h4>'
  ));
  register_sidebar(array(
    'name'    =>  'Footer Area 2',
    'id'      =>  'footer2',
    'before_widget' =>  '<div class="widget-item">',
    'after_widget'  =>  '</div>',
    'before_title'  =>  '<h4 class="sidebar-class">',
    'after_title'  =>  '</h4>'
  ));
  register_sidebar(array(
    'name'    =>  'Footer Area 3',
    'id'      =>  'footer3',
    'before_widget' =>  '<div class="widget-item">',
    'after_widget'  =>  '</div>',
    'before_title'  =>  '<h4 class="sidebar-class">',
    'after_title'  =>  '</h4>'
  ));
  register_sidebar(array(
    'name'    =>  'Footer Area 4',
    'id'      =>  'footer4',
    'before_widget' =>  '<div class="widget-item">',
    'after_widget'  =>  '</div>',
    'before_title'  =>  '<h4 class="sidebar-class">',
    'after_title'  =>  '</h4>'
  ));


}
add_action('widgets_init', 'cdevtheme_widgetsInit');