<footer id="rodape">
	<div class="container">
		<div class="row">
			<div class="contato">

				<h2>Contato</h2>

				<?php wp_nav_menu(array(
					'theme_location' => 'footer_contato'
				)) ?>

					<div class="logos">
							<div class="logoSP">
								<a href="http://www.capital.sp.gov.br" title="Acessar Portal da Prefeitura de São Paulo" class="logoRodape"><img width="150" src="http://35.202.98.79/wp-content/uploads/2020/10/capital_PB.png" class="attachment-thumbnail size-thumbnail" alt="Logo Prefeitura"/></a>
							</div>

							<div class="logoProdam">
								<a href="http://www.capital.sp.gov.br" title="Acessar Site da Prodam" class="logoRodape"><img width="150" src="http://35.202.98.79/wp-content/uploads/2020/10/prodam-PB.png" class="attachment-thumbnail size-thumbnail" alt="Logo Prodam"/></a>
							</div>
					</div>
			</div>

			<div class="sobre-nos">

				<h2>Sobre Nós</h2>

				<?php wp_nav_menu(array(
					'theme_location' => 'footer_sobre_nos'
				)) ?>

			</div> 
			<div class="redes-sociais">
				<h2>Redes Sociais</h2>

				<div class="redesSociais">
					<?php echo do_shortcode('[instagram-feed]'); ?>
				</div>
				<!-- Icones Redes Social -->
				<div class="socialMediaIcons">
					<?php wp_nav_menu(array(
						'theme_location' => 'footer_rede_social'
					)) ?>
				</div>

			</div>

		</div>
	</div>



	<div class="container-fluid">
		<div class="row copyright">
		<p>&#169; COPYRIGHT 2020, Empresa de Tecnologia da Informação e Comunicação do Município de São Paulo</p>	
		</div>
	</div>
</footer>

<?php if ( is_active_sidebar( 'button__interacao-flutuante' ) ) : ?>
  <?php dynamic_sidebar( 'button__interacao-flutuante' ); ?>
<?php endif; ?>


<noscript>Your browser does not support JavaScript!</noscript>
<?php wp_footer(); ?>
</body>

</html>