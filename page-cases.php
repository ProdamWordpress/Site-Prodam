<?php get_header('solucoes'); ?>


<div id="content">
	<div class="card-page cases container">

			<h1><?php the_title(); ?></h1>

		<div class="row">
			<?php
			$homePageCases =  new WP_Query(array(
    		'paged' => get_query_var('paged', 1),
				'post_type' => 'case',
				'posts_per_page' => 9,
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
						</div>
						<div class="leiaMais">Saiba mais</div>
					</a>
				</div>
			<?php } ?>

		</div>
		<div class="pagination">
		<?php 
			echo paginate_links(array(
				'total' => $homePageCases->max_num_pages,
				'prev_text' => __( 'Anterior', 'textdomain' ),
				'next_text' => __( 'Próximo', 'textdomain' ),
			));
		?>
		</div>
		
	</div>
</div>


<?php get_footer(); ?>