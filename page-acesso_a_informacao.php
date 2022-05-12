<?php get_header(); ?>

<main id="content">


	<div id="acessoInformacao" class="container">

		<h1><?php the_title() ?></h1>
		<div class="row info">
			<div class="col-xl-2 col-md-3 d-md-flex d-none justify-content-center align-items-center">
				<div>
					<img src="<?php echo get_theme_file_uri('/img/ita_icone.png') ?>" alt="Logo Acesso à Informação" />
				</div>
			</div>
			<div class="col-xl-10 col-md-9 col-12 info-content">
				<p>Esta seção reúne e divulga dados referentes à Prodam que são de interesse coletivo ou geral com o objetivo de facilitar o acesso à informação pública, conforme determinam a Lei de Acesso à Informação (Lei 12.527, de 18/11/2011) e o Decreto Municipal 53623/2012. Na Prodam, a área responsável pela LAI pode ser contatada pelo correio eletrônico ouvidoria@prodam.sp.gov.br e pelo telefone (11) 3396-9003 – opção 1. Informações adicionais podem ser obtidas no Portal da Transparência.</p>
			</div>
		</div>

		<div class="row">

			<?php
			$homePosts = new WP_Query(array(
				'post_type' => 'acesso_a_informacao',
				'posts_per_page' => 30,
				'tax_query' => array(
					array(
						'taxonomy' => 'categoria_acesso_a_informacao',
						'field'    => 'slug',
						'terms'    => 'post-principal',
					),
				),
			));

			?>

			<?php
			while ($homePosts->have_posts()) {
				$homePosts->the_post();

				// echo ("<pre>");
				// 	var_dump(the_field("url_de_redirecionamento"));
				// echo ("</pre>");
			?>
				<div class="col-12 col-sm-6">

					<?php 
						if ( get_field("url_de_redirecionamento")) {
					?>
							<a class="boxBranco" href=" <?php the_field("url_de_redirecionamento");  ?>" target="_blank">
					<?php		 
						 } else { 
							?>
							<a class="boxBranco" href=" <?php  the_permalink();  ?>" >
						<?php
						 }  
						 ?>
					

						<h2><?php the_title(); ?></h2>
						<p>
							<?php if (has_excerpt()) {
								echo get_the_excerpt();
							} else {
								echo wp_trim_words(get_the_content(), 18);
							} ?>
						</p>
					</a>
				</div>
			<?php }
			?>
			<?php wp_reset_query() ?>

		</div>
	</div>



</main>

<?php get_footer(); ?>