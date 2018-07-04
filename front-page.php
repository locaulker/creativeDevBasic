<?php

get_header(); ?>
	
	<!-- site-content -->
	<div class="site-content clearfix">

    <?php if (have_posts()) :
      while (have_posts()) : the_post();

        the_content();

      endwhile;

      else :
        echo '<p>No content found</p>';

      endif; ?>

      <!-- home columns -->
      <div class="home-columns clearfix">
      
        <div class="one-half">
          <!-- Opinion posts loop begins here -->
        <?php
        // $opinionPosts = new WP_Query('cat=11&posts_per_page=2');
        $opinionPosts = new WP_Query(array(
          'cat' => 11,
          'posts_per_page' => 2
        ));

        if ($opinionPosts->have_posts()) :

          while ($opinionPosts->have_posts()) : $opinionPosts->the_post(); ?>
            <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
            <?php the_excerpt(); ?>
        <?php endwhile;
          // 
          else :

        endif;
        wp_reset_postdata();
        ?><!-- Opinion posts loop ends here -->
        </div><!-- /one-half -->

        
        <div class="one-half last">
        <!-- News posts loop begins here -->
        <?php
        // $opinionPosts = new WP_Query('cat=11&posts_per_page=2');
        $newsPosts = new WP_Query(array(
          'cat' => 12,
          'posts_per_page' => 2
        ));

        if ($newsPosts->have_posts()) :

          while ($newsPosts->have_posts()) : $newsPosts->the_post(); ?>
            <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
            <?php the_excerpt(); ?>
        <?php endwhile;
          // 
          else :

        endif;
        wp_reset_postdata();

        ?><!-- News posts loop ends here -->
        </div><!-- /one-half -->

      </div><!-- /home columns -->



	</div><!-- /site-content -->
	
	<?php get_footer();

?>