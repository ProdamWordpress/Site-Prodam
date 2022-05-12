<?php get_header(); ?>


<div id="content">
	<div id="noticias"class="container">

			<h1><?php the_title(); ?></h1>

			<div class="row info">
				<div class="col-12 info-content">
					<p>A Prodam é uma grande fomentadora de inovação, seja entre os colaboradores, seja com a sociedade. Estabelecer a prática da experimentação tecnológica em busca do domínio de novas ferramentas e método para o desenvolvimento de soluções na Prodam, a criação de um novo modelo de trabalho fortemente apoiado na colaboração, métodos ágeis e práticas de inovação, além de promover a integração das várias equipes da empresa e com a sociedade é uma das nossas missões.<br>
É assim que a Prodam realiza Hackathons e apoia o Laboratório Aberto de Inovação da Cidade de São Paulo, o Mobilab+.</p>
				</div>
			</div>

			<div class="row posts-inovacao">
				<?php
				$homePageCases =  new WP_Query(array(
					'post_type' => 'inovacao',
				));
				while ($homePageCases->have_posts()) {
					$homePageCases->the_post();
					$target ="_self";
					$href = get_permalink();
					if ( get_field("url_de_redirecionamento")) {
						$target="_blank";
						$href = get_field("url_de_redirecionamento");
					}

					?>
					<div class="card">
						<a href="<?php echo $href?>" target="<?php echo $target?>">
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
		
	</div>
</div>


<?php get_footer(); ?>