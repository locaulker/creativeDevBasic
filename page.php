<?php get_header(); ?>


<!-- site-content -->
<div class="site-content clearfix">

<!-- main-column -->
<div class="main-column">
  <?php if (have_posts())  : ?>
    <?php while(have_posts()) : the_post(); ?>
    
    <?php get_template_part('content', 'page'); ?>
    
    <?php endwhile; ?>
    <?php else: 
      echo '<p>No content found</p>';
    ?>
  <?php endif; ?>
</div><!-- /main-column -->

<?php get_sidebar(); ?>

</div><!-- /site-content -->
<?php get_footer(); ?>