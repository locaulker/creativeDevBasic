<?php get_header(); ?>

<h2>Hello World!</h2>

<?php if (have_posts())  : ?>
  <?php while(have_posts()) : the_post(); ?>
    <h4><?php the_title(); ?></h4>
    <?php the_content(); ?>
  <?php endwhile; ?>
  <?php else: 
    echo '<p>No content found</p>';
  ?>
<?php endif; ?>

<?php get_footer(); ?>