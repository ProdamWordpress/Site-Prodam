<?php get_header(); ?>

<div id="content">
  <div class="container box-breadcrumbs">
    <?php
      if ( function_exists('yoast_breadcrumb') ) {
        yoast_breadcrumb( '<p id="breadcrumbs">','</p>' );
      }
    ?>
  </div>
  <div class="container single" >
    <div class="post-content">
      <h1><?php the_title(); ?></h1>

      <div class="data-share">
        <p><?php the_time('d'); ?>/<?php the_time('m'); ?>/<?php the_time('Y'); ?> às <?php the_time('g:i'); ?></p>
        <div class="share-buttons">
          <p>Compartilhe:</p>
          <?php if ( function_exists( 'sharing_display' ) ) { echo sharing_display(); } ?>

        </div>
      </div>
      <div class="fill">
        <?php 
          $thumbnail_id = get_post_thumbnail_id( $post->ID );
          $alt = get_post_meta($thumbnail_id, '_wp_attachment_image_alt', true);   
          the_post_thumbnail( 'full', array( 
		  	$description = get_post(get_post_thumbnail_id())->post_content
		  ), ); 
        ?>    
      </div>
      <span class="alt-image">
        <?php echo $description;?>
      </span>
      <div class="conteudo-mais-sidebar">
        <section>
          <?php the_content(); ?>
        </section>
        <section class="sidebar">
          <div>
          <?php if (is_active_sidebar('noticias-mais-lidas')) : ?>
            <?php dynamic_sidebar('noticias-mais-lidas'); ?>
          <?php endif; ?>  

          </div>
        </section>
      </div>
    </div>

  </div><!-- FECHA container -->
</div>

<?php get_footer(); ?>