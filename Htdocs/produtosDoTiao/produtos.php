<?php
	require_once	'controler_da_view.php';
?>
	<html>
		<head lang="pt-br">	
			<meta charset="utf-8"> <!-- Meta tags -->
			<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
			<title>Produtos do Tião - Produtos</title>
			<link rel="icon" href="imagens/favicon.jpg">
			<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous"> <!-- Bootstrap4 -->
			<link rel="stylesheet" type="text/css" href="estilos/estilos_custom.css">  <!-- Estilo custom -->
			<link rel="stylesheet" type="text/css" href="estilos/normalize.css"> <!-- Normalize -->
			<!--[if lt IE 9]>
				<script src="Js/html5shiv.js"></script>
			<![endif]-->
			<script src="https://kit.fontawesome.com/9d7842dfbe.js" crossorigin="anonymous"></script> <!-- Icones -->
		</head>
		
		<body id="pagina-produtos">
			<header id="topo" > <!-- Inicio do topo -->
				<?php 
					require_once 'menu.php'
				?>
			</header> <!-- Fim do topo -->

		<?php if($_GET['mostra'] == 'cachaça' or $_GET['mostra'] == 'todos' ) { ?>
			<article id="titulo-cachaca" class='bann5 titulo-conteudo  mb-5 d-flex align-items-center justify-content-center' >  <!-- Titulo pinga -->
				<div>					
					<span>Cachaças do Tião</span>
				</div>
			</article>  <!-- Fim Titulo pinga -->	

			<section id="produtos-pinga" class="container-fluid">	<!-- Inicio dos produtos-pinga -->
				<section class="bann1  row my-3 justify-content-around" >				
						<div class="col-12 col-lg-6 mt-1 text-center  p-1 align-self-center d-flex flex-column">
							<div class=" texto-produto m-3"> 
								<h3 class="h3-produto">Caninha do Tião no 12</h3>
								<p class=" p-produto">Cachaças artesanais em versão Prata feita a partir da destilação da garapa e também a versão Ouro feita a partir do envelhecimento na madeira da caninha do tião original. Ambas nos tamanhos mini </p>
								<div class="row">
									<img class="col-6 d-none d-md-block" src="imagens/pinga.png" height="400"> 
									<img class="col-6 d-none d-md-block" src="imagens/mini-pinga.png" height="300">
									<img class="col-6 d-md-none" src="imagens/pinga.png" > 
									<img class="col-6 d-md-none" src="imagens/mini-pinga.png">
								</div>
								
								
								<h3 class="h3-produto">Licor do Tião no 12</h3>
								<p class="p-produto">Diversos licores, ambos feitos a partir da caninha do tião envelhecida na jabuticaba, rapadura e no tamarindo</p>
								<div class="row">
									<img class="col-6" src="imagens/licor.png"> 
									<img class="col-6" src="imagens/licores.png">
								</div>
							</div>
						</div>

						<div class="col-12 col-lg-6 row py-4  mx-auto galeria" >
							<div class=" col-5 my-2"><img src="imagens/pinga/img3.jpeg" class="img-fluid" ></div>
							<div class=" col-7 my-2"><img src="imagens/licor/img2.jpeg" class="img-fluid" ></div>
							<div class="col-7 my-2"><img src="imagens/pinga/img5.jpeg"  class="img-fluid" ></div>
							<div class=" col-5 my-2"><img src="imagens/mini-pinga/img1.jpeg" class="img-fluid" ></div>	
						</div>												
				</section>
			</section>	 <!-- Fim dos produtos-pinga -->
	
		

			

		<?php } ?>

		<?php if($_GET['mostra'] == 'doce' or $_GET['mostra'] == 'todos' ) { ?>

			<article id="titulo-cachaca" class='bann5 titulo-conteudo  mb-5 d-flex align-items-center justify-content-center'>  <!-- Titulo doces -->
				<div>					
					<span>Doces do Tião</span>
				</div>
			</article>  <!-- Fim Titulo doces -->	

			<section id="produtos-rapaduras" class="container-fluid">	<!-- Inicio dos produtos-doces -->
				<section id='rapadura' class="bann2 row my-3 justify-content-around">
						<div class="col-12 col-lg-6 row py-4  mx-auto galeria" >
							<div class=" col-5 my-2"><img src="imagens/rapadura/img3.jpeg" class="img-fluid" ></div>
							<div class=" col-7 my-2"><img src="imagens/rapadura/img2.jpeg" class="img-fluid" ></div>
							<div class="col-7 my-2"><img src="imagens/rapadura/img4.jpeg"  class="img-fluid" ></div>
							<div class=" col-5 my-2"><img src="imagens/rapadura/img1.jpeg" class="img-fluid" ></div>
							
						</div>

						<div class="col-12 col-lg-6 mt-1 text-center  p-1 align-self-center d-flex flex-column">
							<div class=" texto-produto m-3"> 
								<h3 class="h3-produto">Rapadura do Tião</h3>
								<p class=" p-produto">Rapaduras e mini rapaduras de diversos sabores, entre eles pura, amendoim, leite e gengibre. Além da rapadura de mamão exclusiva no tamanho grande </p>
								<div class="row justify-content-center">
									<img class="col-7" src="imagens/rap.png" > 
								</div>
								
								
								<h3 class="h3-produto">Melado do Tião</h3>
								<p class="p-produto">Oferecemos também o melado do tião no sabor puro </p>
								<div class="row justify-content-center">
									<img class="col-7" src="imagens/melado.png">
								</div>
							</div>
						</div>
				</section>
			</section> <!-- Fim dos produtos-doces -->

			


		<?php } ?>
			
			<!--Rodape-->
				<?php 
					require_once 'rodape.php'
				?>
			<!--Fim Rodape-->
			
			<!-- Optional JavaScript -->
    		<!-- jQuery first, then Popper.js, then Bootstrap JS -->
   			<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
   			<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
   			<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
		</body>

	</html>