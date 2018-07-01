<?php get_header(); ?>

  <?php if (have_posts())  : ?>
    <?php while(have_posts()) : the_post(); ?>
    
      <article class="post page">
        <!-- column-container -->
        <div class="column-container clearfix">

          <!-- title-column -->
          <div class="title-column">
          <h2><?php the_title(); ?></h2>
          </div><!-- /title-column -->

          <!-- title-column -->
          <div class="content-column">
          <?php the_content(); ?>
          </div><!-- /content-column -->

        </div><!-- column-container -->
      </article>
    
    <?php endwhile; ?>
    <?php else: 
      echo '<p>No content found</p>';
    ?>
  <?php endif; ?>

<?php get_footer(); ?>