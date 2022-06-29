
	<html>
		
		<head lang="pt-br">
			
			<!-- Meta tags -->

			<meta charset="utf-8">
			
			<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
			
			<title>Produtos do Tião - Home</title>
			<link rel="icon" href="imagens/favicon.jpg">
			
			<!-- Bootstrap4 -->
			<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">

			<!-- Estilo custom -->
			<link rel="stylesheet" type="text/css" href="estilos/css-b.css"> 
			
			<!-- Normalize -->
			<link rel="stylesheet" type="text/css" href="estilos/normalize.css">

			<!--[if lt IE 9]>
				<script src="Js/html5shiv.js"></script>
			<![endif]-->

			<!-- Icones -->
			<script src="https://kit.fontawesome.com/9d7842dfbe.js" crossorigin="anonymous"></script>



		</head>
		
		<body id="home">

			<header id="topo" > <!-- Inicio do topo -->
				
				<?php 
					require_once 'menu.php'
				?>

			</header> <!-- Fim do topo -->

			

			<section  id="carrosel" class="my-5 ">

							<div data-interval= 2000 id="carousel" class="align-self-center carousel slide" data-ride='carousel'>
								
								<ol class="carousel-indicators"> 
									<li data-target='#carousel' data-slide-to='0' class="active"></li>
									<li data-target='#carousel' data-slide-to='1'></li>
									<li data-target='#carousel' data-slide-to='2'></li>
								</ol>

								<div class="carousel-inner ">
									<div class="carousel-item active">
										<img src="imagens/img1.jpeg" height="600" class="w-100">
									</div>

									<div class="carousel-item ">
										<img src="imagens/img2.jpeg" height="600" class="w-100">
									</div>

									<div class="carousel-item ">
										<img src="imagens/img3.jpeg" height="600" class="w-100">
									</div>
								</div>

								<a href="#carousel" class="carousel-control-prev" data-slide='prev'>
									<span class="carousel-control-prev-icon"></span>
								</a>

								<a href="#carousel" class="carousel-control-next" data-slide='next'>
									<span class="carousel-control-next-icon"></span>
								</a>

							</div>
							
			</section> 

			<div id="conteudos" class="container-fluid">	<!-- Inicio dos Conteudos -->
				
				<section class='bann1 arredondamento row mx-auto'>  <!-- Inicio Sessão Cachaças -->
							
					<article class="col-12 d-flex align-items-center mb-5" style="height: 700px;">
						<div class=" w-100 text-center  ">
							<span class="titulo1 p-4"><a href="produtos.php?mostra=cachaça" class="banner">Cachaças artesanais</a></span>
						</div>
					</article>

					<section class="container col-12"> 
						
						<div class="row justify-content-around">
										
							<article class="text-center col-md-5 postagem m-3 p-4">
											
								<div >
												
									<h2 class="text-danger text-uppercase">Pingas do Tião <br> no 12</h2>
												
									<h4 class="lead font-weight-bold text-uppercase">A melhor cachaça artesanal de Goiás</h4>
												
									<p class="lead">
													
										Sabores 
										<span class="border rounded p-1 text-white-50 bg-secondary font-weight-bold">Prata</span> 
										e 
										<span class="border rounded p-1 text-warning bg-secondary font-weight-bold">Ouro</span>

									</p>
												
									<button class="btn btn-danger btn-lg ">
										<a href="produtos.php?mostra=cachaça" class="text-white">Saiba mais ...</a>
									</button>
												
									<br>
												
									<img src="imagens/mini-pinga.png" class="col-8 mt-5 img-fluid" >
												
								</div>

							</article>

							<article class="text-center col-md-5 postagem m-3 p-4">
												
								<div>
													
									<h2 class="text-danger text-uppercase">Licores do Tião <br> no 12</h2>
													
									<h4 class="lead font-weight-bold text-uppercase">Licores exclusivos com a fragância da caninha do tião</h4>
													
									<p class="lead">
														
										Sabores 
										<span class="border rounded p-1 roxo bg-secondary font-weight-bold">Jabuticaba</span>
										,
										<span class="border rounded p-1 text-dark bg-secondary font-weight-bold">Rapadura</span>
										e 
										<span class="border rounded p-1 text-warning bg-secondary font-weight-bold">Tamarindo</span>
													
									</p>
													
									<button class="btn btn-danger btn-lg">
										<a href="produtos.php?mostra=cachaça" class="text-white">Saiba mais ...</a>
									</button>
													
									<br>
													
									<img src="imagens/licor.png" class="col-10 mt-5 img-fluid">
												
								</div>	

							</article>

						</div>

					</section>

				</section>  <!-- Fim Sessão Cachaças -->

				<section class='bann2 arredondamento my-2 row mx-auto'>
							
					<article class="col-12 d-flex align-items-center mb-5" style="height: 700px;">
						<div class="conteudo-titulo w-100 text-center">
							<span class="titulo p-4"><a href="doces.html" class="banner">Doces artesanais</a></span>
						</div>
					</article>
						
					<section class="container col-12">
								
						<div class="row justify-content-around arredondamento ">
									
							<article class="row text-center col-md-5 postagem m-3 p-4">
										
								<div class="col-md-11">
											
									<h2 class="text-danger text-uppercase">Rapaduras <br> do Tião</h2>
											
									<h4 class="lead font-weight-bold text-uppercase">Um doce 100% natural e artesanal</h4>
											
									<p class="lead">
												
										Sabores 
										<span class="border rounded p-1 text-success bg-secondary font-weight-bold">Pura</span>
										,
										<span class="border rounded p-1 text-white bg-secondary font-weight-bold">Leite</span>
										,
										<span class="border rounded p-1 text-dark bg-secondary font-weight-bold">Gengibre</span>
										e
										<span class="border rounded p-1 text-warning bg-secondary font-weight-bold">Amendoim</span>

											
									</p>
											
									<button class="btn btn-danger btn-lg">
										<a href="produtos.php?mostra=doce" class="text-white">Saiba mais ...</a>
									</button>
										
								</div>

								<div class="col-md-11">
										
									<img src="imagens/rap.png" class="col-10 mt-5 img-fluid">
										
								</div>	

							</article>

									

									
							<article class="row text-center col-md-5 postagem m-3 p-4">
										
								<div class="col-md-11">
											
									<h2 class="text-danger text-uppercase">Melado <br> do Tião</h2>
											
									<h4 class="lead font-weight-bold text-uppercase">Melado natural da cana de açucar cremoso</h4>

									<p class="lead">
												
										Sabor
										<span class="border rounded p-1 text-success bg-secondary font-weight-bold">Puro</span>
											
									</p>
											
									<button class="btn btn-danger btn-lg">
										<a href="produtos.php?mostra=doce" class="text-white">Saiba mais ...</a>
									</button>
										
								</div>

								<div class="col-md-11">
										
									<img src="imagens/melado.png" class="col-10 mt-5 img-fluid">
										
								</div>	
									
							</article>
								
						</div>

					</section>  <!-- Inicio Sessão Doces -->

				</section> <!-- Fim Sessão Doces -->
				
			</div> <!-- Fim dos Conteudos -->

				<?php 
					require_once 'rodape.php'
				?>
		
			<!-- Optional JavaScript -->
    		<!-- jQuery first, then Popper.js, then Bootstrap JS -->
   			<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
   			<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
   			<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
		
		</body>

	</html>