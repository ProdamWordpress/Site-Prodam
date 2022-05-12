<?php get_header(); ?>

<div id="content">
  <div class="container box-breadcrumbs">
    <?php
      if ( function_exists('yoast_breadcrumb') ) {
        yoast_breadcrumb( '<p id="breadcrumbs">','</p>' );
      }
    ?>
  </div>
  <div class="container single">
    <div class="post-content">
      <h1><?php the_title(); ?></h1>
      <strong><?php the_time('d'); ?>/<?php the_time('m'); ?>/<?php the_time('Y'); ?></strong>
      <?php the_content(); ?>
    </div>

    <!-- Custom Fields PRO -->
  </div><!-- FECHA container -->
</div>
<?php get_footer(); ?>