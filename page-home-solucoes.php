<?php 
	get_header("solucoes"); 
	echo do_shortcode('[smartslider3 slider="22"]');
?>

<main class="page-home__solucoes" id="content">

	<div class="solucoes">
		<div class="container">

			<!-- SECTION SOLUÇÕES -->
			<div class="row solucoes-title">
				<h2 class="orange-title">Soluções</h2>
			</div>

			<section class="row solucoes-display">
				<div class="solucoes-display__title col-12">
					<span class="blue-line"></span>
					<h4>Infraestrutura e Tecnologia</h4>
				</div>
				<div class="col-lg-6 col-md-12 solucoes-display__content-infra">
					<div class="infra-item">
						<?php wp_nav_menu(array(
							'theme_location' => 'menu_solucao_infra'
						)) ?>
					</div>
				</div>

				<div class="col-lg-6 col-md-12 solucoes-display__content-infra">
					<div class="infra-item">
						<?php wp_nav_menu(array(
							'theme_location' => 'menu_solucao_infra2'
						)) ?>
					</div>
				</div>
			</section>
			<!-- FIM SECTION SOLUÇOES -->

			<!-- SECTION SOLUÇÕES -->
			<div class="row cases-title">
				<h2 class="orange-title">Cases</h2>
			</div>

			<div id="noticias" class="container">
				<div class="row">
					<?php
					$homePageCases =  new WP_Query(array(
						'post_type' => 'case',
						'posts_per_page' => 6,
					));
					while ($homePageCases->have_posts()) {
						$homePageCases->the_post();
						$url = get_permalink(); 
						$target ="_self";
						
						if ( get_field("url_de_redirecionamento")) {
							$url =get_field("url_de_redirecionamento"); 
							$target="_blank";
						}

						?>
						<div class="card">
							<a href="<?php echo $url; ?>" target="<?php echo $target?>">
							<div class="cardTop">
								<?php the_post_thumbnail('');?>
							</div>
							<div class="cardBottom">
								<h2><?php the_title(); ?></h2>
								<div class="leiaMais">Saiba mais</div>
							</div>
						</a>
						</div>
					<?php } ?>
				</div>
			
				<a href="<?php echo site_url('/pages/cases') ?>"><button>+ ver todos</button></a>
		
		</div>
	</div>
</main>

<?php get_footer(); ?>