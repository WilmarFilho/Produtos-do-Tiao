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
					<h1>Pingas</h1>
				</div>
			</article>  <!-- Fim Titulo pinga -->	

			<section id="produtos-pinga" class="container-fluid">	<!-- Inicio dos produtos-pinga -->
				<section class="bann1  row my-3 justify-content-around" >	
					<?php foreach($produtosPinga as $indice => $produto) {  ?>
						<div class="col-md-5 col-5">
							<article class="row  text-center   postagem my-3 p-1" >	
								<div class="col-lg-7 col-12 p-3">
									<h2 class="h2-produto text-danger text-uppercase"><?=$produto->nome?></h2>		
									<h4 class="h4-produto lead font-weight-bold text-uppercase"><?=$produto->descricao?></h4>		
									<p class=" p-produto">		
										Sabor
										<span class="text-capitalize p-1 text-black  font-weight-bold"><?=$produto->sabor?></span>
									</p>		
															
								</div>			
								<div class="col-lg-4 ml-auto col-12 ">
									<img class = "img-produto img-fluid" src="<?=$produto->img_produto?>"   >
								</div>
							</article> 
						</div>
					<?php } ?>
				</section>
			</section>	 <!-- Fim dos produtos-pinga -->

			<article id="titulo-cachaca" class='bann5 titulo-conteudo  mb-5 d-flex align-items-center justify-content-center' >  <!-- Titulo licores -->			
					<div>					
						<h1>Licores</h1>
					</div>
			</article>  <!-- Fim Titulo licores -->	

			<section id="produtos-licores" class="container-fluid">	<!-- Inicio dos produtos-licores -->
				<section id="licor" class="bann2 row justify-content-around arredondamento my-3">
					<?php foreach($produtosLicor as $indice => $produto) { ?>
						<div class="col-5">
							<article class="row  text-center   postagem my-3 p-1" >		
								<div class="col-lg-7 col-12 p-3">
									<h2 class="h2-produto text-danger text-uppercase"><?=$produto->nome?></h2>		
									<h4 class="h4-produto lead font-weight-bold text-uppercase"><?=$produto->descricao?></h4>		
									<p class=" p-produto">	
										Sabor
										<span class="text-capitalize p-1 text-black  font-weight-bold"><?=$produto->sabor?></span>
									</p>		
											
								</div>				
								<div class="col-lg-4 ml-auto col-12 ">
									<img class = "img-produto img-fluid" src="<?=$produto->img_produto?>"   >
								</div>
							</article> 
						</div>
					<?php } ?>
				</section>
			</section> 	<!-- Fim dos produtos-licores -->

		<?php } ?>

		<?php if($_GET['mostra'] == 'doce' or $_GET['mostra'] == 'todos' ) { ?>

			<article id="titulo-cachaca" class='bann5 titulo-conteudo-  mb-5 d-flex align-items-center justify-content-center'>  <!-- Titulo rapaduras -->			
				<div>					
					<h1>Rapaduras</h1>
				</div>
			</article>  <!-- Fim Titulo rapaduras -->	

			<section id="produtos-rapaduras" class="container-fluid">	<!-- Inicio dos produtos-rapaduras -->
				<section id='rapadura' class="bann3 row my-3 justify-content-around">
					<?php foreach($produtosRapadura as $indice => $produto) { ?>
						<div class="col-md-5 col-5">
							<article class="row  text-center   postagem my-3 p-1" >		
								<div class="col-12 p-3">
									<h2 class="h2-produto text-danger text-uppercase"><?=$produto->nome?></h2>		
									<h4 class="h4-produto lead font-weight-bold text-uppercase"><?=$produto->descricao?></h4>		
									<p class=" p-produto">		
										Sabor
										<span class="text-capitalize p-1 text-black  font-weight-bold"><?=$produto->sabor?></span>
									</p>		
									
								</div>	
														
								<div class=" col-12 col-md-8 mx-auto ">
									<img class = "img-rap img-fluid" src="<?=$produto->img_produto?>"   >
								</div>

							</article> 
						</div>
					<?php } ?>
				</section>
			</section> <!-- Fim dos produtos-rapaduras -->

			<article id="titulo-cachaca" class='bann5 titulo-conteudo  mb-5 d-flex align-items-center justify-content-center' >  <!-- Titulo melado -->			
					<div>					
						<h1>Melados</h1>
					</div>
			</article>  <!-- Fim Titulo melado -->	

			<div id="produtos-melado" class="container-fluid">	<!-- Inicio dos produtos-melado -->
				<section id="conteudo" class="bann4 row justify-content-around  my-3">
					<?php foreach($produtosMelado as $indice => $produto) { ?>
						<div class="col-md-6 col-8">
							<article class="row  text-center   postagem my-3 p-1" >		
								<div class=" col-12 p-3">
									<h2 class="h2-produto text-danger text-uppercase"><?=$produto->nome?></h2>					
									<h4 class="h4-produto lead font-weight-bold text-uppercase"><?=$produto->descricao?></h4>	
									<p class=" p-produto">
										Sabor
										<span class="text-capitalize p-1 text-black  font-weight-bold"><?=$produto->sabor?></span>
									</p>	
												
								</div>				
								<div class=" mx-auto col-12 ">
									<img class = "img-produto img-fluid" src="<?=$produto->img_produto?>"   >
								</div>

							</article> 
						</div>
					<?php } ?>
				</section>
			</div> <!-- Fim dos produtos-melado -->

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