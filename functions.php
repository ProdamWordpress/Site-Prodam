<?php

// CSS Files
function prodam_files() {
	wp_enqueue_style('custom-google-fonts', get_theme_file_uri('https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700'));
	wp_enqueue_style('my-theme-bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.min.css' );
	wp_enqueue_style('reset', get_theme_file_uri('/css/reset.css'));

	wp_enqueue_style('font', get_theme_file_uri('/css/font-awesome.css'));
	if ( is_page()):wp_enqueue_style('page-default', get_theme_file_uri('/css/page.css'));endif;
	if ( is_page()):wp_enqueue_style('elementor-changes', get_theme_file_uri('/css/elementor.css'));endif;
	if ( is_front_page() ):wp_enqueue_style('front-page', get_theme_file_uri('/css/front-page.css'));endif;
	if ( is_page('solucao')):wp_enqueue_style('solucao', get_theme_file_uri('/css/page-solucao.css'));endif;

	wp_enqueue_style('single', get_theme_file_uri('/css/single.css'));
	if ( is_search()):wp_enqueue_style('search', get_theme_file_uri('/css/page-search.css'));endif;
	if ( is_page('noticias') or is_page('cases') or is_page('solucao') or is_page('servicos-para-voce')):wp_enqueue_style('noticia', get_theme_file_uri('/css/noticia.css'));endif;
	if ( is_page('cases') or is_page('solucao') or is_page('servicos-para-voce')):wp_enqueue_style('cases', get_theme_file_uri('/css/page-cases.css'));endif;
	if ( is_page('contato')):wp_enqueue_style('contato', get_theme_file_uri('/css/page-contato.css'));endif;
	if ( is_page('contato')):wp_enqueue_style('contato-datatable', get_theme_file_uri('/css/datatables.css'));endif;
	if ( is_page('ouvidoria')):wp_enqueue_style('ouvidoria', get_theme_file_uri('/css/page-ouvidoria.css'));endif;
	if ( is_page('compras-e-licitacoes')):wp_enqueue_style('noticia', get_theme_file_uri('/css/compras-e-licitacoes.css'));endif;
	if ( is_page('participacao_social')):wp_enqueue_style('participacao_social', get_theme_file_uri('/css/participacao_social.css'));endif;
	if ( is_page('acesso_a_informacao')):wp_enqueue_style('acesso_a_informacao', get_theme_file_uri('/css/page-acessoInformacao.css'));endif;
	if ( is_page('inovacao')):wp_enqueue_style('inovacao', get_theme_file_uri('/css/page-inovacao.css'));endif;
	if ( is_single()):wp_enqueue_style('post-singular', get_theme_file_uri('/css/post-singular.css'));endif;
  if ( is_singular('noticia')):wp_enqueue_style('single-noticia', get_theme_file_uri('/css/single-noticia.css'));endif;
  if ( is_singular('solucoes')):wp_enqueue_style('single-solucoes', get_theme_file_uri('/css/single-solucoes.css'));endif;

	wp_enqueue_style('header', get_theme_file_uri('/css/header.css'));
	wp_enqueue_style('footer', get_theme_file_uri('/css/footer.css'));
}
add_action('wp_enqueue_scripts', 'prodam_files');


// JavaScript Files
function my_custom_script_load(){
	wp_enqueue_script( 'jquery', get_theme_file_uri() . '/js/jquery-3.5.1.min.js');
	wp_enqueue_script('my-theme-bootstrap', get_template_directory_uri() . '/assets/js/bootstrap.min.js', array('popper'), '1.0', true );
  wp_enqueue_script('jqueryCookie', get_theme_file_uri('/js/jquery.cookie.js'));
	wp_enqueue_script('datatables', get_theme_file_uri('/js/datatables.js'));
	wp_enqueue_script('admin-datatables', get_theme_file_uri('/js/admin-datatables.js'));
	wp_enqueue_script('funcoes', get_theme_file_uri('/js/funcoes.js'));
	if( is_front_page()): wp_enqueue_script('front-page', get_theme_file_uri('/js/front-page.js'));endif;
	if ( is_singular('solucoes')):wp_enqueue_script('single-solucoes', get_theme_file_uri('/js/single-solucoes.js'));endif;
	wp_enqueue_script('popper', 'https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js');
}
add_action('wp_footer', 'my_custom_script_load');

function prodam_features() {
	add_theme_support( 'title-tag' );
	add_theme_support('post-thumbnails');
	add_theme_support('categories');
	add_image_size('noticiasThumb', 400, 230, true);
}
add_action('after_setup_theme', 'prodam_features');


register_nav_menus(array(
	'footer_contato' => 'Footer Contato',
	'footer_sobre_nos' => 'Footer Sobre Nós',
	'footer_rede_social' => 'Footer Rede social',
	'menu_solucao_infra' => 'Menu Solução Infraestrutura',
	'menu_solucao_infra2' => 'Menu Solução Infraestrutura 2',
	'menu_solucao_opera' => 'Menu Solução Operações de Sistemas'
));

function custom_taxonomies() 
{	
	$labels = array(
		'name' => 'Categorias',
		'singular_name' => 'Categoria',
		'search_items' => 'Search Categorias',
		'all_items' => 'All Categorias',
		'parent_item' => 'Parent Categoria',
		'parent_item_colon' => 'Parent Categoria:',
		'edit_item' => 'Edit Categoria',
		'update_item' => 'Update Categoria',
		'add_new_item' => 'Add New Categoria',
		'new_item_name' => 'New Categoria Name',
		'menu_name' => 'Categorias'
	);

	$solucoes = array(
		'hierarchical' => true,
		'show_in_rest' => true,
		'labels' => $labels,
		'show_ui' => true,
		'show_admin_column' => true,
		'show_admin_bar' => true,
		'query_var' => true,
		'rewrite' => array('slug' => 'categoria-solucoes')
	);

	$contato = array(
		'labels' => $labels,
		'hierarchical' => true,
		'rewrite' => array('slug' => 'contato-categoria'),
		'show_ui' => true,
		'show_admin_column' => true,
		'show_admin_bar' => true,
	);

	$noticia = array(
		'hierarchical' => true,
		'show_in_rest' => true,
		'labels' => $labels,
		'show_ui' => true,
		'show_admin_column' => true,
		'show_admin_bar' => true,
		'query_var' => true,
		'rewrite' => array('slug' => 'categoria')
	);

	$sobre_nos = array(
		'hierarchical' => true,
		'show_in_rest' => true,
		'labels' => $labels,
		'show_ui' => true,
		'show_admin_column' => true,
		'show_admin_bar' => true,
		'query_var' => true,
		'rewrite' => array('slug' => 'categoria_sobre_nos')
	);

	$acesso_a_informacao = array(
		'hierarchical' => true,
		'show_in_rest' => true,
		'labels' => $labels,
		'show_ui' => true,
		'show_admin_column' => true,
		'show_admin_bar' => true,
		'query_var' => true,
		'rewrite' => array('slug' => 'categoria_acesso_a_informacao')
	);

	$participacao_social = array(
		'hierarchical' => true,
		'show_in_rest' => true,
		'labels' => $labels,
		'show_ui' => true,
		'show_admin_column' => true,
		'show_admin_bar' => true,
		'query_var' => true,
		'rewrite' => array('slug' => 'categoria_participacao_social')
	);

	$resp_social = array(
		'hierarchical' => true,
		'show_in_rest' => true,
		'labels' => $labels,
		'show_ui' => true,
		'show_admin_column' => true,
		'show_admin_bar' => true,
		'query_var' => true,
		'rewrite' => array('slug' => 'categoria_resp_social')
	);

	$cases = array(
		'hierarchical' => true,
		'show_in_rest' => true,
		'labels' => $labels,
		'show_ui' => true,
		'show_admin_column' => true,
		'show_admin_bar' => true,
		'query_var' => true,
		'rewrite' => array('slug' => 'categoria_cases')
	);

	register_taxonomy('categoria-solucoes', array('solucoes'), $solucoes);
	register_taxonomy('categoria_cases', array('case'), $cases);
	register_taxonomy('categoria_resp_social', array('resp_social'), $resp_social);
	register_taxonomy('contato-categoria', array('contato'), $contato);
	register_taxonomy('categoria', array('noticia'), $noticia);
	register_taxonomy('categoria_sobre_nos', array('sobre_nos'), $sobre_nos);
	register_taxonomy('categoria_acesso_a_informacao', array('acesso_a_informacao'), $acesso_a_informacao);
	register_taxonomy('categoria_participacao_social', array('participacao_social'), $participacao_social);
}

add_action( 'init', 'custom_taxonomies');


function prodam_register_widgets() {
 
	register_sidebar( array(
	 'name' => 'Menu Principal',
	 'id' => 'menu-principal',
	 'description' => 'Header',
	 'before_widget' => '<div id="%1$s" class="widget-container %2$s">',
	 'after_widget' => '</div>',
	 'before_title' => '<h3 class="widget-title">',
	 'after_title' => '</h3>',
	));

	register_sidebar( array(
		'name' => 'Menu Secundário',
		'id' => 'menu-secundario',
		'description' => 'Header',
		'before_widget' => '<div id="%1$s" class="widget-container %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	));

	register_sidebar( array(
		'name' => 'Menu Soluções',
		'id' => 'menu-solucoes',
		'description' => 'Header',
		'before_widget' => '<div id="%1$s" class="widget-container %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	   ));
		 
	register_sidebar(array (
		'name'          => '[HOME] Cidades Inteligentes Prodam',
		'id'            => 'home_infobox_cidades_inteligentes',
	));
		
	register_sidebar(array (
		'name'          => '[HOME] Infraestrutura Prodam',
		'id'            => 'home_infobox_infraestrutura',
		'before_widget' => '<div class="indicator">',
		'after_widget'  => '</div>',
	));  
	register_sidebar(array (
		'name'          => '[NOTICIAS] Mais Lidas',
		'id'            => 'noticias-mais-lidas',
		'before_widget' => '<div class="mais-lidas">',
		'after_widget'  => '</div>',
	));

	register_sidebar(array (
		'name'          => '[HOME] Menu Soluções',
		'id'            => 'menu-solucoes-home',
		'before_widget' => '<div class="menu-solucoes-home">',
		'after_widget'  => '</div>',
	));
	
	register_sidebar(array (
		'name'          => '[Botão] Interação Flutuante',
		'id'            => 'button__interacao-flutuante',
		'before_widget' => '<div class="button__interacao-flutuante botao-flutuante">',
		'after_widget'  => '</div>',
	));
}
add_action( 'widgets_init', 'prodam_register_widgets' );

// Remove o Jetpack Share Button
function share_jetpack(){
	if( ! function_exists( 'sharing_display' ) )
	return;
	remove_filter( 'the_content', 'sharing_display', 19 );
}
add_action( 'init', 'share_jetpack', 11 );

add_filter( 'wpseo_breadcrumb_links', 'unbox_yoast_seo_breadcrumb_append_link' );
 function unbox_yoast_seo_breadcrumb_append_link( $links ) {
     global $post;
     if( is_singular('participacao_social')){
         $breadcrumb = array(
         'url' => site_url( '/participacao_social/' ),
         'text' => 'Participação Social',
       );
	   array_unshift($links, $breadcrumb); 
	   
     }elseif( is_singular('noticia')){
		$breadcrumb = array(
		'url' => site_url( '/noticias/' ),
		'text' => 'Notícias',
	  );
	  array_unshift($links, $breadcrumb); 
	}elseif( is_singular('acesso_a_informacao')){
		$breadcrumb = array(
		'url' => site_url( '/acesso_a_informacao/' ),
		'text' => 'Acesso à Informacao',
	  );
	  array_unshift($links, $breadcrumb); 
	}elseif( is_singular('sobre_nos')){
		$breadcrumb = array(
		'url' => site_url( '/sobre_nos/' ),
		'text' => 'Sobre Nós',
	  );
	  array_unshift($links, $breadcrumb); 
	}

     return $links;
 }

 function myplugin_settings() {
	// Add category metabox to page
	register_taxonomy_for_object_type('category', 'page');
	// Add tag metabox to page
	register_taxonomy_for_object_type('post_tag', 'page');

	//Adiciona possibilidade de descrição para items do menu
	function prefix_nav_description( $item_output, $item, $depth, $args ) {
		if ( !empty( $item->description ) ) {
				$item_output = str_replace( $args->link_after . '</a>', '<p class="menu-item-description">' . $item->description . '</p>' . $args->link_after . '</a>', $item_output );
		}
		return $item_output;
	}
	
	add_filter( 'walker_nav_menu_start_el', 'prefix_nav_description', 10, 4 );
}
// Add to the admin_init hook of your theme functions.php file 
add_action( 'init', 'myplugin_settings' );
