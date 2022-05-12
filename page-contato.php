<?php get_header(); ?>
<div id="content">
<div id="contato" class="contato container single">

  <h1><?php the_title() ?></h1>

  <?php the_content(); ?>

  <section class="contato-categoria__presidente">
    <h3>Diretor Presidente <span>- Contato:</span></h3>
    
    <div class="table-container table-responsive">
      <table class="table table-hover">
        <thead>
          <tr>
            <th>Cargo</th>
            <th>Nome</th> 
            <th>Telefone</th>
            <th>Endereço</th>
          </tr>
        </thead>
        <tbody>
          <?php 
          $pageContato = new WP_Query( array(
            'post_type' => 'contato',
            'tax_query' => array(
              array(
                'taxonomy' => 'contato-categoria',
                'field'    => 'slug',
                'terms'    => 'presidente',
              ),
            ),
          ));
  
          while ( $pageContato->have_posts() ) {
            $pageContato->the_post(); 
            ?>
              <tr>
              <td style="width: 25%;"><?php the_field('role'); ?></td>
                <td style="width: 25%;"><?php the_field('name'); ?></td>
                <td style="width: 15%;"><?php the_field('phone'); ?></td>
                <td style="width: 25%;"><?php the_field('adress'); ?></td>
              </tr>
              <div colspan="4"  class="table__description-container" id="accordion">
                <div colspan="4" class="card">
                  <div class="card-header" id="headingOne">
                    <h4 class="mb-0">
                      <button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                        + Breve Currículo
                      </button>
                    </h4>
                  </div>

                  <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
                    <div class="card-body">
                      <?php the_field('description'); ?>
                    </div>
                  </div>
                </div>
              </div>
            
              
            <?php
          }
          ?>
      </table>
  </section>

  <section class="contato-categoria__diretoria contato-categoria">
    <h3>Diretoria <span>- Lista de Contatos:</span></h3>

    <div class="table-container table-responsive">
      <table id="table-diretoria" class="table table-hover">
        <thead>
          <th>Cargo</th>
          <th>Nome</th>
          <th>Telefone</th>
          <th>Endereço</th>
        </thead>
        <tbody>
        <?php 
          $pageContato = new WP_Query( array(
            'post_type' => 'contato',
            'tax_query' => array(
              array(
                'taxonomy' => 'contato-categoria',
                'field'    => 'slug',
                'terms'    => 'diretoria',
              ),
            ),
          ));
  
          while ( $pageContato->have_posts() ) {
            $pageContato->the_post(); 
            ?>
              <tr>
                <td style="width: 25%;"><?php the_field('role'); ?></td>
                <td style="width: 25%;"><?php the_field('name'); ?></td>
                <td style="width: 15%;"><?php the_field('phone'); ?></td>
                <td style="width: 25%;"><?php the_field('adress'); ?></td>
              </tr>
            <?php
          }
        ?>
        </tbody>
      </table>
  </section>

  <section class="contato-categoria__gerencia contato-categoria">
    <h3>Gerência <span>- Lista de Contatos:</span></h3>

    <div class="table-container table-responsive">
      <table id="table-gerencia" class="table table-hover">
        <thead>
          <th>Cargo</th>
          <th>Nome</th>
          <th>Telefone</th>
          <th>Endereço</th>
        </thead>
        <tbody>
        <?php 
          $pageContato = new WP_Query( array(
            'post_type' => 'contato',
            'tax_query' => array(
              array(
                'taxonomy' => 'contato-categoria',
                'field'    => 'slug',
                'terms'    => 'gerencia',
              ),
            ),
          ));
  
          while ( $pageContato->have_posts() ) {
            $pageContato->the_post(); 
            ?>
              <tr>
                <td style="width: 25%;"><?php the_field('role'); ?></td>
                <td style="width: 25%;"><?php the_field('name'); ?></td>
                <td style="width: 15%;"><?php the_field('phone'); ?></td>
                <td style="width: 25%;"><?php the_field('adress'); ?></td>
              </tr>
            <?php
          }
        ?>
        <tbody>
      </table>
  </section>

  </div>
</div>
<?php get_footer(); ?>