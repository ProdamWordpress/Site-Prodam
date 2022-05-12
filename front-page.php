<?php get_header(); ?>

<?php
echo do_shortcode('[smartslider3 slider="9"]');
?>
<main class="home">
	<div class="cidadesInteligentes">
			<div class="row justify-content-center">
				<div class="col-11">
					<h1>Olá, <strong>eu sou a Prodam</strong>.</h1>
					<p>Há quase cinquenta anos desenvolvo inovação tecnológica para cidades. Atuo prioritariamente na maior metrópole da América Latina, a cidade de São Paulo.
Com minha equipe técnica de excelência, desenvolvo tecnologia e soluções inovadoras visando a transformação digital da cidade de São Paulo, ajudando a construir uma metrópole mais inteligente, conectada e humana.</p>
				</div>
			</div>

			<div class="row-box">
				<?php
					echo do_shortcode('[smartslider3 slider="25"]');
				?> 
			</div>
  </div>


	<div class="noticia front-page__noticias">
		<div class="container">
			<h2>Notícias</h2>
			<div class="row">

				<?php
				$homePageNoticia =  new WP_Query(array(
					'paged' => get_query_var('paged', 1),
					'post_type' => 'noticia',
					'posts_per_page' => 6,
				));
				while ($homePageNoticia->have_posts()) {
					$homePageNoticia->the_post(); ?>
					<div class="card">
						<a href="<?php the_permalink(); ?>">
							<div class="cardTop">
									<?php the_post_thumbnail('post-thumbnail', ['class' => 'noticiasThumbnail']); ?>
							</div>
							<div class="cardBottom">
								<h3><?php the_title(); ?></h3>
								<p>
									<?php if (has_excerpt()) {
										echo get_the_excerpt();
									} else {
										echo wp_trim_words(get_the_content(), 15);
									} ?>
								</p>
							</div>
							<div class="leiaMais" alt="<?php the_title(); ?>">Leia mais</div>
						</a>
					</div>
				<?php } ?>
				<a href="<?php echo site_url('/pages/noticias') ?>" accesskey="4"><button>+ ver todas</button></a>
			</div>
		</div>
	</div>

	<section class="solucoes">
		<?php 
			$frontPageSolucoes = new WP_Query( array(
				'post_type' => 'solucoes',
				'posts_per_page' => 1,
				'orderby' => 'rand'
			));

			while ( $frontPageSolucoes->have_posts() ) {
				$frontPageSolucoes->the_post(); 
				?>
					<div class="solucoes-display" style="background-image:url('<?php the_field('background_image') ?>')">
						<div class="container">
							<div class="col-xl-6 solucoes-content">
								<h2>Soluções Prodam</h2>
								<h3><?php the_title() ?></h3>
								<p><?php the_field('description') ?></p>
								<a class="direct" href="<?php the_permalink(); ?>">Saiba mais</a>
								<p class="redirect">Conheça todas as nossas soluções <a href="<?php echo site_url('/solucoes') ?>">aqui</a>!</p>
							</div>
						</div>
						<div class="mobile-image" style="background-image:url('<?php the_field('background_image') ?>')">
					</div>
				<?php
			}
			?>
	</section>

	<div class="infraEstruturaPRODAM">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2>Infraestrutura PRODAM</h2>
                </div>
                
                <?php if ( is_active_sidebar( 'home_infobox_infraestrutura' ) ) : ?>
                    <div class="col-12">
                        <div id="containerIndicators" class="containerIndicators">
                            <?php dynamic_sidebar( 'home_infobox_infraestrutura' ); ?>
                        </div>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
		
	<div class="conectandoCidadaos">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<h2>Conectando Cidadãos</h2>
				</div>
			</div>
			<div class="row">
				<?php
					echo do_shortcode('[smartslider3 slider="20"]');
				?>
			</div>
		</div>
	</div>

	<div class="reconhecimentos">

		<div class="container">
			<div class="row">
				<div class="col-12">
					<h2>Reconhecimentos</h2>

				</div>
			</div>

			<div class="row">
					
			<?php
				echo do_shortcode('[smartslider3 slider="28"]');
			?>
				
			</div>

		</div>



	</div>




	
</main>


<?php
get_footer();

?>