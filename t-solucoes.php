<!DOCTYPE html>

<html lang="pt-br">

<head>

	<meta http-equiv="refresh" content="0;URL=hospedagem.htm">

	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />


	<link rel="stylesheet" type="text/css" href="css/normalize.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" />
	<link rel="stylesheet" type="text/css" href="css/main.css" />

	<link rel="stylesheet" type="text/css" href="css/font-awesome.css" />

	<link rel="stylesheet" type="text/css" href="css/estilo.css" />



	<link rel="manifest" href="manifest.json">
	<link rel="icon" type="image/x-icon" href="favicon.ico" />
	<link rel="icon" type="image/png" href="favicon.png" />

	<link rel="apple-touch-icon" href="apple-touch-icon.png" />


	<link rel="mask-icon" href="safari-pinned-tab.svg" color="#417da2">
	<title>PRODAM > Soluções</title>
</head>

<body>

	<div class="container">
		<div class="row">
			<div class="col-xs-12 col-sm-6 hidden-xs">
				<ul class="menu-access">
					<li><a href="#conteudo" accesskey="1">IR PARA O CONTEÚDO</a></li>
					<li><span>|</span></li>
					<li><a href="#menuPrincipalSolucoes" accesskey="2">IR PARA O MENU</a></li>
					<li><span>|</span></li>
					<li><a href="#rodape" accesskey="3">IR PARA O RODAPÉ</a></li>
				</ul>

			</div>
		</div>
	</div>

	<header>
		<div class="container-fluid cabecalhoPMSP">
			<div class="container">
				<div class="row">
					<div class="col-xs-12 col-sm-4 col-md-4 nomePMSP"><a href="http://www.capital.sp.gov.br" title="Acessar Portal da Prefeitura de São Paulo">Cidade de São Paulo</a></div>
					<div class="col-xs-6 col-sm-4 col-md-4 acesso-info"><a href="http://transparencia.prefeitura.sp.gov.br/acesso-a-informacao/Paginas/default.aspx" title="Acessar site de Acesso à informação da Prefeitura de São Paulo">Acesso à informação&nbsp;<img src="img/accessInfo.png" class="accessInfo" alt="Acesso à informação" /></a></div>
					<div class="col-xs-6 col-sm-4 col-md-4 transparenciaSP"><a href="http://transparencia.prefeitura.sp.gov.br/Paginas/home.aspx" title="Acessar site de Transparência da Prefeitura de São Paulo">Transparência São Paulo</a></div>
				</div>
			</div>
		</div>
		<div class="container-fluid cabecalhoSecretaria">
			<div class="container">
				<a href="https://www.prefeitura.sp.gov.br/cidade/secretarias/inovacao/" title="Acessar Portal da Secretaria Municipal de Inovação e Tecnologia">Secretaria Municipal de Inovação e Tecnologia</a>
			</div>
		</div>

		<div class="tarjaAcessibilidade">
			<div class="container">
				<div class="row">

					<div class="col-xs-12 col-sm-6 cpm-acessibilidade hidden-xs">
						<ul>
							<li><a href="javascript:void(0);" class="fontResizer_add" title="Aumentar a fonte">A<sup>+</sup></a></li>
							<li><a href="javascript:void(0);" class="fontResizer_minus" title="Diminuir a fonte">A<sup>-</sup></a></li>
							<li><a href="javascript:void(0);" class="fontResizer_reset" title="Voltar ao tamanho padrão e ao contraste normal">A</a></li>
							<li><a href="javascript:void(0);" title="Deixar o fundo preto com letras brancas" class="btn-contraste1"><i class="fa fa-adjust" aria-hidden="true"></i></a></li>
							<!-- li><a href="https://v3.icom-libras.com.br/w/smped/webview/" class="cil" title="Libras" target="_blank"></a></li -->
						</ul>
						<span class="acessibilidade">Acessibilidade</span>
					</div>
				</div>
			</div>
		</div>

		<div class="container-fluid headerPrincipal">
			<div class="container">
				<div class="row">
					<div class="navbar col-xs-3 col-sm-3 col-md-2">


						<a href="index.htm" class="logo" title="Ir para a página inicial">PRODAM</a>




					</div>

					<div class="col-xs-9 col-sm-9 col-md-10">

						<span class="linksExternos">
							<a href="http://transparencia.prefeitura.sp.gov.br/acesso-a-informacao/Paginas/default.aspx" title="Ir para o site de Acesso à Informação">Acesso à Informação</a>
							<a href="https://www.prefeitura.sp.gov.br/cidade/secretarias/inovacao/prodam/index.php?p=259830" title="Ir para o site da Ouvidoria PRODAM">Ouvidoria</a>
							<a href="#!">Agenda de Autoridades</a>
							<a href="http://esic.prefeitura.sp.gov.br/" title="Ir para o site do e-Sic">e-Sic</a>

						</span>



					</div>


					<div class="col-xs-12">

						<button id="btnMobile02" type="button" onclick="toggleNav();">
							<i class="fa fa-bars" aria-hidden="true"></i>
						</button>

						<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#menuPrincipalSolucoes" aria-expanded="false" aria-controls="navbar">
							<i class="fa fa-bars" aria-hidden="true"></i>

						</button>



						<button id="btnBuscaMobileSolucoes" type="button" data-toggle="modal" data-target="#modalBuscaMobileSolucoes">
							<i class="fa fa-search"></i>
						</button>
					</div>
				</div>

			</div>

		</div>



		<nav id="menuPrincipalSolucoes" role="navigation" class="navbar-collapse collapse">
			<div class="container">
				<div id="buscaSolucoes">

					<input type="text" id="campoBuscaSolucoes" class="form-control pull-left" placeholder="Digite aqui...">

					<a href="#!" id="buscarInternoSolucoes" class=""><i class="fa fa-search"></i></a>


				</div>
				<span class="pull-left">
					<button type="button" id="btnMenuHamburguer" onclick="toggleNav()">
						<i class="fa fa-bars" aria-hidden="true"></i>
					</button>
				</span>
				<span><a href="#!" id="btnSistemasInformacao">Sistemas de Informação</a></span>
				<span><a href="#!" id="btnGeo">Geoprocessamento</a></span>
				<span><a href="#!" id="btnBI">Business Intelligence</a></span>
				<span><a href="hospedagem.htm" id="btnServicoHospedagem">Serviço de Hospedagem</a></span>
				<span><a href="#!" id="btnServicoTelecom">Serviço de Telecom</a></span>
				<span><a href="#!" id="btnServicoNuvem">Serviço Em Nuvem</a></span>
				<span><a href="#!" id="btnBuscaSolucoes" class="pull-right"><i class="fa fa-search"></i></a></span>
			</div>

		</nav>




	</header>

	<main class="solucoes">




	</main>


	<div id="mySidenav" class="sidenav">

		<a href="#!" class="closebtn pull-right" onclick="closeNav();" title="Fechar Menu">
			<i class="fa fa-close" aria-hidden="true"></i>
		</a><br clear="all" />
		<div>
			<a href="#!"><i class="fa fa-chevron-right"></i>&nbsp; Opção 01</a>




			<a href="#!"><i class="fa fa-chevron-right"></i>&nbsp; Opção 02</a>



		</div>
	</div>





	<script type="text/javascript" language="JavaScript" src="js/jquery-2.2.2.js"></script>

	<script type="text/javascript" language="JavaScript" src="js/owl.carousel.min.js"></script>


	<script type="text/javascript" language="JavaScript" src="js/bootstrap.min.js"></script>
	<script type="text/javascript" language="JavaScript" src="js/jquery.cookie.js"></script>

	<script type="text/javascript" language="JavaScript" src="js/funcoes.js"></script>



</body>

</html>