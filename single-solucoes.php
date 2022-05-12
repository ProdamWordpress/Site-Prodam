<?php get_header('solucoes');

  $categories = get_the_terms( $post->ID , 'categoria-solucoes' );
  $category = $categories[0]->name;

?>

<main class="single-solucoes" style="background-image:url('<?php the_field('background_image') ?>')">
  <div class="container">

    <div class="single-solucoes__title">
      <h1><?php echo($category) ?></h1>
      <h2><?php the_title() ?></h2>
      <p><?php the_field('description') ?></p>
    </div>
  
    <div class="single-solucoes__content">
      <section class="beneficios">
        <h3>Benefícios</h3>
        <ul>
          <?php
            for ($i=0; $i < 10; $i++) { 
              $label = 'beneficio' . ($i + 1);

              if( get_field($label) ): ?>
                <li><?php the_field($label); ?></li>
              <?php endif;
            }
          ?>
        </ul>
      </section>

      <a class="pdf-download" href="<?php the_field('pdf_url'); ?>" target="_blank">
        <img src="<?php echo(get_site_url()) ?>/wp-content/uploads/2020/11/Grupo-1066.svg" alt="PDF Download">
        Mais detalhes
      </a>

    </div>

  </div>  
</main>



<?php get_footer(); ?>