<?php get_header(); ?>
<section id="content">

	<div class="noticias-page noticia container">

			<h1><?php the_title(); ?></h1>

		<div class="row">
			<?php
			$homePageNoticia =  new WP_Query(array(
    		'paged' => get_query_var('paged', 1),
				'post_type' => 'noticia',
				'posts_per_page' => 9,
			));

			while ($homePageNoticia->have_posts()) {
				$homePageNoticia->the_post(); ?>

				<div class="card">
					<a href="<?php the_permalink(); ?>">
						<div class="cardTop">
								<?php the_post_thumbnail('post-thumbnail', ['class' => 'noticiasThumbnail']); ?>
						</div>
						<div class="cardBottom">
							<h2><?php the_title(); ?></h2>
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
			</div>
			<div class="pagination">
					<?php 
					echo paginate_links(array(
						'total' => $homePageNoticia->max_num_pages,
						'prev_text' => __( 'Anterior', 'textdomain' ),
						'next_text' => __( 'Próximo', 'textdomain' ),
					));
				?>
			</div>
			
		</div>
	</section>


<?php get_footer(); ?>