<?php get_header(); ?>

  <?php if (have_posts())  : ?>
    <?php while(have_posts()) : the_post(); ?>
    
    <!-- 
      Add CSS class: 'has-thumbnail' if post has featured image. The opening <article> tag should look like below:
      <artticle class="post has-thumbnail">
      Note: 'has-thumbnail' is styled in css
    -->
    <article class="post <?php if (has_post_thumbnail()) { ?>has-thumbnail<?php } ?>">

      <!-- Display Featured Image -->
      <div class="post-thumbnail">
        <a href="<?php the_permalink(); ?>">
          <?php the_post_thumbnail('small-thumbnail'); ?>
        </a>
      </div>

      <!-- Getting the Post Title -->
      <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>

      <!-- Getting the Date Article was posted -->
      <p class="post-info">
        <?php the_time('F j, Y'); ?> | by 

          <!-- Getting the Author of the post -->
          <a href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>">
            <?php the_author(get_the_author_meta('ID')); ?></a> | Posted in 

            
            <?php
            /* Getting the Category/Categories */
              $categories = get_the_category();
              $separator  = ", ";
              $output     = '';

              if ($categories) {
                foreach ($categories as $category) {
                  $output .=  '<a href=" ' . get_category_link( $category->term_id ) . ' ">' .  $category->cat_name . '</a>' . $separator;
                }
              }
              echo trim($output, $separator);

            /* End Category/Categories */
            ?>          
      </p><!-- End Date Article was posted -->


      <?php if($post->post_excerpt) { ?>
        <p>
          <?php echo get_the_excerpt(); ?>
          <a href="<?php the_permalink(); ?>">Read More &raquo;</a>
        </p>
      <?php } else { the_excerpt(); } ?>

    </article>
    
    <?php endwhile; ?>
    <?php else: 
      echo '<p>No content found</p>';
    ?>
  <?php endif; ?>

<?php get_footer(); ?>