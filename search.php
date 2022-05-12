<?php get_header(); ?>

<div class="container">
  

  <main>

    <p class="search-query">Você pesquisou por: <span class="search-result-query"><?php echo esc_html(get_search_query(false)) ?></span></p>
    <hr>

    <!-- ACESSO A INFORMaÇÃO -->
    <div id="search_acesso_a_informacao">
      <div class="titulo-box-post">
        <a href="<?php echo site_url('/pages/acesso_a_informacao') ?>"><h3>Acesso a Informação</h3></a>
        <?php 
        $allsearch = new WP_Query("s=$s&showposts=0&post_type=acesso_a_informacao"); 
        echo $allsearch ->found_posts.' resultados.'; 
          if ($allsearch ->found_posts == '0') {
            ?>
            <script>
              document.querySelector('#search_acesso_a_informacao').classList.add("d-none");
            </script>
            <?php
          };
        ?>
      </div>

      <section class="box-results">
        <?php
        $paged = ( get_query_var('paged') ) ? get_query_var('paged') : 1;
        query_posts( "s=$s&paged=$paged&post_type=acesso_a_informacao" );
          if (have_posts()) {
            ?>
            <?php 
            while(have_posts()) {
              the_post();
              ?>
                <div class="content">
                  <h3><?php the_title(); ?> - <span class="data"><?php the_time('d'); ?>/<?php the_time('m'); ?>/<?php the_time('Y'); ?></span></h3>
                  <p><?php echo wp_trim_words(get_the_content(), 25); ?> <a href="<?php the_permalink(); ?>"><span class="saiba-mais">Saiba Mais</span></a></p> 
                </div>
              <?php
            }
          } 
        ?>
        </section>
      </div>

      <!-- PARTICIPAÇÃO SOCIAL -->
      <div id="search_participacao_social">
        <div class="titulo-box-post">
          <a href="<?php echo site_url('/pages/participacao_social') ?>"><h3>Participação Social</h3></a>
          <?php 
          $allsearch = new WP_Query("s=$s&showposts=0&post_type=participacao_social"); 
          echo $allsearch ->found_posts.' resultados'; 
            if ($allsearch ->found_posts == '0') {
              ?>
              <script>
                document.querySelector('#search_participacao_social').classList.add("d-none");
              </script>
              <?php
            };
          ?>
        </div>
        <section class="box-results">
        <?php
        $paged = ( get_query_var('paged') ) ? get_query_var('paged') : 1;
        query_posts( "s=$s&paged=$paged&post_type=participacao_social" );
          if (have_posts()) {
            ?>
            <?php 
            while(have_posts()) {
              the_post();
              ?>
                <div class="content">
                  <h3><?php the_title(); ?> - <span class="data"><?php the_time('d'); ?>/<?php the_time('m'); ?>/<?php the_time('Y'); ?></span></h3>
                  <p><?php echo wp_trim_words(get_the_content(), 25); ?> <a href="<?php the_permalink(); ?>"><span class="saiba-mais">Saiba Mais</span></a></p> 
                </div>
              <?php
            }
          } 
        ?>
      </section>
    </div>

    <!-- SOBRE NÓS -->
    <div id="search_sobre_nos">
      <div class="titulo-box-post">
        <a href="<?php echo site_url('/pages/sobre_nos') ?>"><h3>Sobre Nós</h3></a>
        <?php 
        $allsearch = new WP_Query("s=$s&showposts=0&post_type=sobre_nos"); 
        echo $allsearch ->found_posts.' resultados'; 
          if ($allsearch ->found_posts == '0') {
            ?>
            <script>
              document.querySelector('#search_sobre_nos').classList.add("d-none");
            </script>
            <?php
          };
        ?>
      </div>
        <section class="box-results">
        <?php
        $paged = ( get_query_var('paged') ) ? get_query_var('paged') : 1;
        query_posts( "s=$s&paged=$paged&post_type=sobre_nos" );
          if (have_posts()) {
            ?>
            <?php 
            while(have_posts()) {
              the_post();
              ?>
                <div class="content">
                  <h3><?php the_title(); ?> - <span class="data"><?php the_time('d'); ?>/<?php the_time('m'); ?>/<?php the_time('Y'); ?></span></h3>
                  <p><?php echo wp_trim_words(get_the_content(), 25); ?> <a href="<?php the_permalink(); ?>"><span class="saiba-mais">Saiba Mais</span></a></p> 
                </div>
              <?php
            }
          } 
        ?>
      </section>
    </div>

    <!-- CASES -->
    <div id="search_cases">
      <div class="titulo-box-post">
          <a href="<?php echo site_url('/pages/cases') ?>"><h3>Cases</h3></a>
          <?php 
        $allsearch = new WP_Query("s=$s&showposts=0&post_type=case"); 
        echo $allsearch ->found_posts.' resultados'; 
          if ($allsearch ->found_posts == '0') {
            ?>
            <script>
              document.querySelector('#search_cases').classList.add("d-none");
            </script>
            <?php
          };
        ?>
      </div>
      <section class="box-results">
        <?php
        $paged = ( get_query_var('paged') ) ? get_query_var('paged') : 1;
        query_posts( "s=$s&paged=$paged&post_type=case" );
          if (have_posts()) {
            ?>
            <?php 
            while(have_posts()) {
              the_post();
              ?>
                <div class="content">
                  <h3><?php the_title(); ?> - <span class="data"><?php the_time('d'); ?>/<?php the_time('m'); ?>/<?php the_time('Y'); ?></span></h3>
                  <p><?php echo wp_trim_words(get_the_content(), 25); ?> <a href="<?php the_permalink(); ?>"><span class="saiba-mais">Saiba Mais</span></a></p> 
                </div>
              <?php
            }
          } 
        ?>
      </section>
    </div>

    <!-- NOTICIAS -->
    <div id="search_noticias">
      <div class="titulo-box-post">
        <a href="<?php echo site_url('/pages/noticias') ?>"><h3>Notícias</h3></a>
        <?php 
        $allsearch = new WP_Query("s=$s&showposts=0&post_type=noticia"); 
        echo $allsearch ->found_posts.' resultados.'; 
          if ($allsearch ->found_posts == '0') {
            ?>
            <script>
              document.querySelector('#search_noticias').classList.add("d-none");
            </script>
            <?php
          };
        ?>
      </div>

      <section class="box-results">
        <?php
        $paged = ( get_query_var('paged') ) ? get_query_var('paged') : 1;
        query_posts( "s=$s&paged=$paged&post_type=noticia" );
          if (have_posts()) {
            ?>
            <?php 
            while(have_posts()) {
              the_post();
              ?>
                <div class="content">
                  <h3><?php the_title(); ?> - <span class="data"><?php the_time('d'); ?>/<?php the_time('m'); ?>/<?php the_time('Y'); ?></span></h3>
                  <p><?php echo wp_trim_words(get_the_content(), 25); ?> <a href="<?php the_permalink(); ?>"><span class="saiba-mais">Saiba Mais</span></a></p> 
                </div>
              <?php
            }
          } 
        ?>
      </section>
    </div>
      

    <!-- INOVAÇÃO -->
    <div id="search_inovacao">
      <div class="titulo-box-post">
        <a href="<?php echo site_url('/pages/inovacao') ?>"><h3>Inovação</h3></a>
        <?php 
        $allsearch = new WP_Query("s=$s&showposts=0&post_type=inovacao"); 
        echo $allsearch ->found_posts.' resultados'; 
          if ($allsearch ->found_posts == '0') {
            ?>
            <script>
              document.querySelector('#search_inovacao').classList.add("d-none");
            </script>
            <?php
          };
        ?>
      </div>
      <section class="box-results">
        <?php
        $paged = ( get_query_var('paged') ) ? get_query_var('paged') : 1;
        query_posts( "s=$s&paged=$paged&post_type=inovacao" );
          if (have_posts()) {
            ?>
            <?php 
            while(have_posts()) {
              the_post();
              ?>
                <div class="content">
                  <h3><?php the_title(); ?> - <span class="data"><?php the_time('d'); ?>/<?php the_time('m'); ?>/<?php the_time('Y'); ?></span></h3>
                  <p><?php echo wp_trim_words(get_the_content(), 25); ?> <a href="<?php the_permalink(); ?>"><span class="saiba-mais">Saiba Mais</span></a></p> 
                </div>
              <?php
            }
          } 
        ?>
      </section>
    </div>
    

    <!-- CONTATO -->
    <div id="search_contato">
      <div class="titulo-box-post">
        <a href="<?php echo site_url('/pages/contato') ?>"><h3>Contato</h3></a>
        <?php 
        $allsearch = new WP_Query("s=$s&showposts=0&post_type=contato"); 
        echo $allsearch ->found_posts.' resultados'; 
          if ($allsearch ->found_posts == '0') {
            ?>
            <script>
              document.querySelector('#search_contato').classList.add("d-none");
            </script>
            <?php
          };
        ?>
      </div>
      <section class="box-results">
        <?php
        $paged = ( get_query_var('paged') ) ? get_query_var('paged') : 1;
        query_posts( "s=$s&paged=$paged&post_type=contato" );
          if (have_posts()) {
            ?>
            <?php 
            while(have_posts()) {
              the_post();
              ?>
                <div class="content">
                  <h3><?php the_title(); ?> - <span class="data"><?php the_time('d'); ?>/<?php the_time('m'); ?>/<?php the_time('Y'); ?></span></h3>
                  <p><?php echo wp_trim_words(get_the_content(), 25); ?> <a href="<?php the_permalink(); ?>"><span class="saiba-mais">Saiba Mais</span></a></p> 
                </div>
              <?php
            }
          }   
        ?>
      </section>
    </div>

    <!-- SOLUÇÕES -->
    <div id="search_solucoes">
      <div class="titulo-box-post">
        <a href="<?php echo site_url('/pages/solucoes') ?>"><h3>Soluções</h3></a>
        <?php 
        $allsearch = new WP_Query("s=$s&showposts=0&post_type=solucoes"); 
        echo $allsearch ->found_posts.' resultados'; 
          if ($allsearch ->found_posts == '0') {
            ?>
            <script>
              document.querySelector('#search_solucoes').classList.add("d-none");
            </script>
            <?php
          };
        ?>
      </div>
      <section class="box-results">
        <?php
        $paged = ( get_query_var('paged') ) ? get_query_var('paged') : 1;
        query_posts( "s=$s&paged=$paged&post_type=solucoes" );
          if (have_posts()) {
            ?>
            <?php 
            while(have_posts()) {
              the_post();
              ?>
                <div class="content">
                  <h3><?php the_title(); ?> - <span class="data"><?php the_time('d'); ?>/<?php the_time('m'); ?>/<?php the_time('Y'); ?></span></h3>
                  <p><?php echo wp_trim_words(get_the_content(), 25); ?> <a href="<?php the_permalink(); ?>"><span class="saiba-mais">Saiba Mais</span></a></p> 
                </div>
              <?php
            }
          }   
        ?>
      </section>
    </div>

  </main>
  
</div>
<?php get_footer(); ?>
