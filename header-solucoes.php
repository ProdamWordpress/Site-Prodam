<!DOCTYPE html>

<html lang="pt-br">

<head>
	<?php wp_head(); ?>

	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />

	<link rel="manifest" href="manifest.json">
	<link rel="icon" type="image/x-icon" href="favicon.ico" />
	<link rel="icon" type="image/png" href="favicon.png" />
	<link rel="apple-touch-icon" href="apple-touch-icon.png" />
	<link rel="mask-icon" href="safari-pinned-tab.svg" color="#417da2">

    <link rel="stylesheet" type="text/css" href="<?php  echo get_theme_file_uri('/css/header-solucoes.css') ?>" />

	<title>PRODAM > Home</title>
</head>

<body>

<header>
    <div class="head-principal">
        <div class="container-md">
            <div class="row">
                <div class="col-md-5 col-12  d-flex justify-content-center align-items-center justify-content-md-start">
                    <a href="#navbar" class="navbar-brand head-logo" accesskey="1">
                        <img src="<?php echo get_theme_file_uri('/img/logoProdam.png');?>" class="logo" alt="Logo Prodam"/>
                    </a>
                    <p class="title-head">| SOLUÇÕES</p>
                </div>
                <div class="col-md-7 d-none d-xl-flex justify-content-end align-items-center head-menu">
                <?php  if ( is_active_sidebar( 'menu-secundario' ) ) {      
                    dynamic_sidebar( 'menu-secundario' );
                } ?>
                </div>
            </div>
        </div>
    </div>

    <nav id="navbar" class="navbar navbar-expand-xl navbar-dark bg-dark principal">
        <div class="container-md d-flex justify-content-between">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            
            
            <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
                <?php  if ( is_active_sidebar( 'menu-solucoes' ) ) {      
               
                    dynamic_sidebar( 'menu-solucoes' );
                } ?>
                <hr class="d-block d-xl-none" color="#333333">
                 <div class="col-md-8 d-block d-xl-none justify-content-start align-items-center head-menu">
                    <?php  if ( is_active_sidebar( 'menu-secundario' ) ) {      

                        dynamic_sidebar( 'menu-secundario' );

                    } ?>
                </div>
            </div>
            <div class="navbar-principal-btn">
                <button class="btn  my-2 my-sm-0" id="btn_pesquisa" onclick = "Pesquisa()">
                    <img src="<?php  echo get_theme_file_uri('/img/Icon-busca.svg ') ?> " alt="Abrir caixa de busca">
                </button>
            
           </div>
        </div>
    </nav>

    <div class="col-xl-12 offset-xl-0 offset-sm-2 offset-2 col-sm-10 col-10 d-flex justify-content-center align-items-center container-pesquisa hide" id="container-pesquisa">
        <div id="pesquisa" class="pesquisa col-12" >
            
            <form method="get" class="container d-flex justify-content-center align-items-center pesquisa-box"  action="<?php echo esc_url(site_url('/')); ?>">
                <div class=inpt-pesquisa >
                    <label class="search-label" for="s">&empty;</label>
                        <input class="s" id="s" type="search" name="s" placeholder="Digite aqui...">
                </div>
                <button type="submit" value="Search" alt="Buscar"> 
                    <img src="<?php  echo get_theme_file_uri('/img/Icon-busca.svg') ?>" alt="Buscar">
                </button>
            </form>

        </div>
    </div> 

</header>