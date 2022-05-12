<?php get_header(); ?>

<main>

	<div class="container" id="content">
		<div class="row">
			<div class="col-12" id="participacaoSocial">
				<h1>Responsabilidade Social</h1>
			</div>
		</div>

		<div class="row">

			<?php
			$homePosts = new WP_Query(array(
				'post_type' => 'resp_social',
				'orderby'   => 'title',
				'order' => 'ASC',
				'posts_per_page' => 30,
				'tax_query' => array(
					array(
						'taxonomy' => 'categoria_sobre_nos',
						'field'    => 'slug',
						'terms'    => 'post-principal',
					),
				),
			));

			?>

			<?php
			while ($homePosts->have_posts()) {
				$homePosts->the_post();
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