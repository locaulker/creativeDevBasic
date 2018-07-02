<?php get_header(); ?>

  <?php if (have_posts())  : ?>

  <h2>
    <?php
      if(is_category()) {
          single_cat_title();
      } elseif (is_tag()) {
          single_tag_title();
      } elseif (is_author()) {
          the_post();
          echo 'Author: ' . get_the_author_firstname();
          rewind_posts();
      } elseif (is_day()) {
          echo 'Day Archives: ' . get_the_date();
      } elseif (is_month()) {
          echo 'Month Archives: ' . get_the_date('F Y');
      } elseif (is_year()) {
          echo 'Year Archives: ' . get_the_date('Y');
      } else {
          echo 'Archives:';
      }
    ?>
  </h2>

    <?php while(have_posts()) : the_post();
    
    get_template_part('content');

    endwhile;
        else: 
      echo '<p>No content found</p>';
    ?>
  <?php endif; ?>

<?php get_footer(); ?>