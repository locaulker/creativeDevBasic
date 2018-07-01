<?php
/**
* Template Name: Special Layout
*/

?>
<?php get_header(); ?>

<?php if (have_posts())  : ?>
  <?php while(have_posts()) : the_post(); ?>
  
  <article class="post page">
    <h2><?php the_title(); ?></h2>

    <!--  info box -->
    <div class="info-box">
      <h4>Disclaimer Title</h4>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ea iusto facere illum, debitis iure ut voluptatum sapiente corrupti dolorum doloribus sequi quibusdam atque impedit minima quisquam, ipsa quod qui perspiciatis?</p>
    </div><!--  /info box -->

    <?php the_content(); ?>
  </article>
  
  <?php endwhile; ?>
  <?php else: 
    echo '<p>No content found</p>';
  ?>
<?php endif; ?>

<?php get_footer(); ?>