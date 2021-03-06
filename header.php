<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title><?php bloginfo('name'); ?></title>

  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
  
<div class="container">

  <!--  .site-header -->
  <header class="site-header">

  <!--  .hd-search -->
  <div class="hd-search">
    <?php get_search_form(); ?>
  </div><!--  /hd-search -->


    <h1><a href="<?php echo home_url(); ?>"><?php bloginfo('name'); ?></a></h1>
    <h5>
      <?php bloginfo('description'); ?>
      <?php if (is_page('portfolio')) : ?>
        - Thank you for viewing our work.
      <?php endif; ?>
    </h5>

    <nav class="site-nav">
      <?php
        $args = array(
          'theme_location'  =>   'primary'
        );
      ?>
      <?php wp_nav_menu($args); ?>
    </nav>


  </header><!-- /site-header -->
  
