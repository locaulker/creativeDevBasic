  <footer class="site-footer">

    <!-- footer-widgets -->
    <div class="footer-widgets clearfix">

      <?php if(is_active_sidebar( 'footer1' )) : ?>
        <div class="footer-widget-area">
          <?php dynamic_sidebar('footer1'); ?>     
        </div><!-- /footer-widget-area -->
      <?php endif; ?>

      <?php if(is_active_sidebar( 'footer2' )) : ?>
        <div class="footer-widget-area">
          <?php dynamic_sidebar('footer2'); ?>     
        </div><!-- /footer-widget-area -->
      <?php endif; ?>

      <?php if(is_active_sidebar( 'footer3' )) : ?>
        <div class="footer-widget-area">
          <?php dynamic_sidebar('footer3'); ?>     
        </div><!-- /footer-widget-area -->
      <?php endif; ?>

      <?php if(is_active_sidebar( 'footer4' )) : ?>
        <div class="footer-widget-area">
          <?php dynamic_sidebar('footer4'); ?>     
        </div><!-- /footer-widget-area -->
      <?php endif; ?>

    </div><!-- /footer-widgets -->

    <!-- Footer Navigation -->
    <?php
      $args = array(
        'theme_location'  =>   'footer'
      );
    ?>
    <nav class="site-nav">
      <?php wp_nav_menu($args); ?>
    </nav>

    <!-- Copyright Info -->
    <p>
      <?php bloginfo('name'); ?> - &copy; <?php echo date('Y'); ?>
    </p>
  </footer>
</div><!-- /.container -->
<?php wp_footer(); ?>
</body>
</html>