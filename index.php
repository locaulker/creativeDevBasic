<?php get_header(); ?>

  <?php if (have_posts())  : ?>
    <?php while(have_posts()) : the_post(); ?>
    
    <article class="post">
      <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
      <?php the_content(); ?>
    </article>
    
    <?php endwhile; ?>
    <?php else: 
      echo '<p>No content found</p>';
    ?>
  <?php endif; ?>

<?php get_footer(); ?>