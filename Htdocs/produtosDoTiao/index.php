
	<html>
		<head lang="pt-br">	
			<meta charset="utf-8"> <!-- Meta tags -->
			<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
			<title>Produtos do Tião - Home</title>
			<link rel="icon" href="imagens/favicon.jpg">
			<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous"> <!-- Bootstrap4 -->
			<link rel="stylesheet" type="text/css" href="estilos/estilos_custom.css">  <!-- Estilo custom -->
			<link rel="stylesheet" type="text/css" href="estilos/normalize.css"> <!-- Normalize -->
			<!--[if lt IE 9]>
				<script src="Js/html5shiv.js"></script>
			<![endif]-->
			<script src="https://kit.fontawesome.com/9d7842dfbe.js" crossorigin="anonymous"></script> <!-- Icones -->
		</head>
		
		<body id="pagina-home">
			<header id="topo"> <!-- Inicio do topo -->
				<?php 
					require_once 'menu.php'
				?>
			</header> <!-- Fim do topo -->
			
			<section  id="carrosel" class="animacao my-5">  <!-- Inicio do carrosel -->
				<div data-interval= 2000 id="carousel" class=" carousel slide" data-ride='carousel'>	
					<ol class="carousel-indicators"> 
						<li data-target='#carousel' data-slide-to='0' class="active"></li>
						<li data-target='#carousel' data-slide-to='1'></li>
						<li data-target='#carousel' data-slide-to='2'></li>
					</ol>
					<div class="carousel-inner  ">
						<div class="carousel-item active">
							<img src="imagens/img1.jpeg"  class="w-100 img-slide">
						</div>

						<div class="carousel-item ">
							<img src="imagens/img2.jpeg"  class="w-100 img-slide">
						</div>

						<div class="carousel-item ">
							<img src="imagens/img3.jpeg"  class="w-100 img-slide">
						</div>
					</div>
					<a href="#carousel" class=" carousel-control-prev" data-slide='prev'>
						<span class="carousel-control-prev-icon"></span>
					</a>
					<a href="#carousel" class="carousel-control-next" data-slide='next'>
						<span class="carousel-control-next-icon"></span>
					</a>
				</div>
			</section>  <!-- Fim do carrosel -->
			<section id="sobre" class="animacao mb-5 container-fluid bordas-sobre-2"> <!-- Inicio Sobre -->
				<div class="row mx-auto">
					<div class="col-12 bordas-sobre py-2 text-center" >
						<h1 class="h1-sobre ">Conheça a <br><span class="custom-font">Produtos do tião</span></h1>
					</div>
					<div class="col-12 col-lg-6 row py-4  mx-auto" >
						<div class=" col-5 my-2"><img src="imagens/cliente1.jpeg" class="img-fluid" ></div>
						<div class=" col-7 my-2"><img src="imagens/cliente5.jpg" class="img-fluid" ></div>
						<div class="col-7 my-2"><img src="imagens/cliente4.jpeg"  class="img-fluid" ></div>
						<div class="d-xl-none col-5 my-2"><img src="imagens/mini-pinga/img1.jpeg" class="img-fluid" ></div>
						<div class=" col-5 my-2"><img src="imagens/rapadura/img1.jpeg" class="img-fluid" ></div>
						<div class="d-xl-none col-7 my-2"><img src="imagens/cliente3.jpeg"  class="img-fluid"></div>
					</div>
					<div class="col-12 col-lg-6 mt-1 text-center bordas-sobre  p-5 texto-sobre align-self-center d-flex flex-column">
						<h3 class="h3-sobre">Quem somos</h3>
						<p class="p-sobre">Somos uma pequena empresa  do interior de Goiás e já abrangimos 3 estados om nossos produtos artesanais</p>
						<h3 class="h3-sobre">Nossos produtos</h3>
						<p class="p-sobre">Cada produto feito artesanalemnte e com todo cuidado para nosso clientes e distribuidores, desde o corte da cana até a embalagem. Temos pingas, licores, rapaduras e etc</p>
						<h3 class="h3-sobre">Atendimento</h3>
						<p class="p-sobre">Para nós o cliente vem em primeiro lugar ! Temos nossas redes sociais <br>
								<a href="" class="btn btn-danger btn-sm">
									<i class="fa-brands fa-whatsapp text-white fa-2x"></i>
								</a> <a href="https://www.instagram.com/tiao.produtos/" class="btn btn-danger btn-sm">
									<i class="fa-brands fa-instagram text-white fa-2x"></i>
								</a><br> e nossa pagina de <span class="custom-font"><a href="contato.php">contato</a></span> a  disposição para clientes e distribuidores</p>

						<p class="mt-5 veja-mais">Veja mais sobre nossos <span class="custom-font"><a href="#cachacas">produtos</a></span> ou saiba quem são nossos <span class="custom-font"><a href="distribuidores.php">distribuidores</a></span> <br>
						<a href="#cachacas"><i  class="fa-solid fa-angles-down fa-1x"></i></a>
						<a href="#cachacas"><i  class="fa-solid fa-angles-down fa-1x"></i></a>
						<a href="#cachacas"><i  class="fa-solid fa-angles-down fa-1x"></i></a></p>
					</div>
				</div>
			</section> <!-- Fim Sobre -->

			<div id="cachacas" style="height: 50px"></div> <!-- Anchor -->

			<article id="titulo-cachaca" class='bann5 titulo-conteudo  mb-5 d-flex align-items-center justify-content-center' >  <!-- Titulo Cachaças -->			
					<div>					
						<h1><a href="produtos.php?mostra=cachaça" class="banner">Cachaças </a></h1>
					</div>
			</article>  <!-- Fim Titulo Cachaças -->	
			
			<section id="conteudos-cachacas" class="container-fluid  ">	<!-- Inicio dos Conteudos Cachaças -->
					<article class="bann1 arredondamento"> 
						<div class="row justify-content-around ">			
							<article class="text-center col-md-5 col-10 postagem m-3 p-4">	
								<div >	
									<h2 class="h2-postagem text-danger text-uppercase">Pingas do Tião <br> no 12</h2>		
									<h4 class="lead font-weight-bold text-uppercase">A melhor cachaça artesanal de Goiás</h4>		
									<p class="lead">
										Sabores 
										<span class=" p-1 text-secondary  font-weight-bold">Prata</span>e 
										<span class=" p-1 text-warning  font-weight-bold">Ouro</span>
									</p>		
									<button class="btn btn-danger btn-lg ">
										<a href="produtos.php?mostra=cachaça" class="text-white">Saiba mais ...</a>
									</button>		
									<br>	
									<img src="imagens/mini-pinga.png" class="col-10 mt-5 img-fluid" >		
								</div>
							</article>
							<article class="text-center col-md-5 col-10 postagem m-3 p-4">			
								<div>			
									<h2 class="h2-postagem text-danger text-uppercase">Licores do Tião <br> no 12</h2>			
									<h4 class="lead font-weight-bold text-uppercase">Licores exclusivos com a fragância da caninha do tião</h4>			
									<p class="lead">
										Sabores 
										<span class="p-1 roxo font-weight-bold">Jabuticaba</span>,
										<span class="p-1 text-dark font-weight-bold">Rapadura</span>e
										<span class="p-1 text-warning font-weight-bold">Tamarindo</span>				
									</p>
									<button class="btn btn-danger btn-lg">
										<a href="produtos.php?mostra=cachaça" class="text-white">Saiba mais ...</a>
									</button>		
									<br>			
									<img src="imagens/licor.png" class="col-10 mt-5 img-fluid">		
								</div>	
							</article>
						</div>
					</article>
			</section> <!-- Fim dos Conteudos Cachaças -->

			<article id="titulo-doce"  class='bann5 titulo-conteudo   mb-5 d-flex align-items-center justify-content-center mt-5'> <!-- Titulo Doces -->	
					<div>
							<h1><a href="produtos.php?mostra=doce" class="banner">Doces </a></h1>
					</div>
			</article>  <!-- Fim Titulo Doces -->

			<section id="conteudos-doces" class="container-fluid">	<!-- Inicio dos Conteudos Doces -->
				<article class='bann2 arredondamento my-2 row mx-auto justify-content-around'>	
							<div class="row text-center col-md-5 col-11 postagem m-3 p-4">	
								<div class="col-md-11">	
									<h2 class="h2-postagem text-danger text-uppercase">Rapadura <br> do Tião</h2>
									<h4 class="lead font-weight-bold text-uppercase">Um doce 100% natural e artesanal</h4>	
									<p class="lead">
										Sabores 
										<span class=" p-1 text-success font-weight-bold">Pura</span>,
										<span class="p-1 text-secondary font-weight-bold">Leite</span>,
										<span class="p-1 text-dark font-weight-bold">Gengibre</span>e
										<span class="p-1 text-warning font-weight-bold">Amendoim</span>	
									</p>	
									<button class="btn btn-danger btn-lg">
										<a href="produtos.php?mostra=doce" class="text-white">Saiba mais ...</a>
									</button>
								</div>
								<div class="col-md-11">
									<img src="imagens/rap.png" class=" mt-5 img-fluid">
								</div>
							</div>
							<div class="row text-center col-md-5 col-11 postagem m-3 p-4">	
								<div class="col-md-11">	
									<h2 class="h2-postagem text-danger text-uppercase">Melado <br> do Tião</h2>	
									<h4 class="lead font-weight-bold text-uppercase">Melado natural da cana de açucar cremoso</h4>
									<p class="lead">Sabor<span class="p-1 text-success font-weight-bold">Puro</span>	
									</p>	
									
								</div>
								<div class="col-md-11">
									<img src="imagens/melado.png" class="img-fluid mt-5 ">
								</div>
							</div>
				</article> 
			</section> <!-- Fim Sessão Doces -->

			<!-- Rodape -->
				<?php 
					require_once 'rodape.php'
				?>
			<!-- Fim rodape -->
		
			<!-- Optional JavaScript -->
    		<!-- jQuery first, then Popper.js, then Bootstrap JS -->
   			<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
   			<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
   			<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
		</body>
	</html>