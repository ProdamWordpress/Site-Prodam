<?php get_header(); ?>

<main>


	<div class="container" id="content">
		<div class="row">
			<div class="col-12" id="participacaoSocial">
				<h1>Participação Social</h1>
			</div>
		</div>

		<div class="row">

			<?php
			$homePosts = new WP_Query(array(
				'post_type' => 'participacao_social',
				'posts_per_page' => 9,
				'tax_query' => array(
					array(
						'taxonomy' => 'categoria_participacao_social',
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