<?php
	
	
	require_once	'controler_da_view.php';

		


	

?>
	<html>
		
		<head lang="pt-br">
			
			<!-- Meta tags -->

			<meta charset="utf-8">
			
			<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
			
			<title>Produtos do Tião - Produtos</title>
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
		
		<body id="pagina-produtos">

			
			<header id="topo" > <!-- Inicio do topo -->
				
				<?php 
					require_once 'menu.php'
				?>


			</header> <!-- Fim do topo -->



				
			<div id="conteudos" class="container-fluid">	<!-- Inicio dos Conteudos -->
				
				<?php if($_GET['mostra'] == 'cachaça' or $_GET['mostra'] == 'todos' ) { ?>

					<section class='row bann1 arredondamento mx-auto'>
								
						<div class="col-12 d-flex align-items-center mb-5" style="height: 700px;">
							<div class=" conteudo-titulo w-100 text-center  ">
								<span class="titulo1 p-4"><a href="cachaças.html" class="banner">Pingas</a></span>
							</div>
						</div>
							

						<div class="col-12 container arredondamento">

							<section class="row my-3 justify-content-around">
										
								<?php 

									foreach($produtosPinga as $indice => $produto) {  ?>
										<article class="row flex-row-reverse  text-center col-md-5 postagem m-3 p-4">
													
											<div class="col-md-7 row" >
														
												<div class="col-md-12" >
													
													<h2 class="text-danger text-uppercase"><?=$produto->nome?></h2>
															
													<h4 class="lead font-weight-bold text-uppercase"><?=$produto->descricao?></h4>
															
													<p class="lead">
																
														Sabor
														<span class="text-capitalize p-1 text-black  font-weight-bold"><?=$produto->sabor?></span>

													</p>
															
													<button class="btn btn-danger btn-lg ">
														<a href="todos_produtos.php?produto=<?=$produto->id?> " class="text-white">Saiba mais ...</a>
													</button>

												</div>
													
											</div>	
													
											<div class="col-md-4">
												<img src="<?=$produto->img_produto?>" height="800" class=" mt-5"   >
											</div>

										</article> 
								<?php } ?>

							</section>

						</div>
					
					</section>	

					<section class='row bann2 arredondamento mx-auto my-2'>
								
						<div class="col-12 d-flex align-items-center mb-5" style="height: 700px;">
							<div class=" conteudo-titulo w-100 text-center  ">
								<span class="titulo1 p-4"><a href="cachaças.html" class="banner">Licores</a></span>
							</div>
						</div>
							

						<div class="col-12 container arredondamento">
							
							<section class="row justify-content-around arredondamento my-3">

								<?php foreach($produtosLicor as $indice => $produto) { ?>
									
									<article class="row flex-row-reverse text-center col-md-5 postagem m-3 p-4">
											
										<div class="col-md-7 row">
												
											<div class="col-md-12">

												<h2 class="text-danger text-uppercase"><?=$produto->nome?></h2>
													
												<h4 class="lead font-weight-bold text-uppercase"><?=$produto->descricao?></h4>
													
												<p class="lead">
													Sabor 
													<span class="text-capitalize  p-1  text-black font-weight-bold"><?=$produto->sabor?></span>
												</p>
													
												<button class="btn btn-danger btn-lg">
													<a href="todos_produtos.php?produto=<?=$produto->id?>" class="text-white">Saiba mais ...</a>
												</button>

											</div>
											
										</div>
												
										<div class="col-md-5">
											<img src="<?=$produto->img_produto?>" width="250" class="col-10 mt-5">
										</div>	

									</article>

								<?php } ?>
							
							</section>

						</div>
					
					</section>

				<?php } ?>

				

				<?php if($_GET['mostra'] == 'doce' or $_GET['mostra'] == 'todos' ) { ?>

					<section class='row bann3 arredondamento mx-auto my-2'>
								
						<div class="col-12 d-flex align-items-center mb-5" style="height: 700px;">
							<div class=" conteudo-titulo w-100 text-center  ">
								<span class="titulo1 p-4"><a href="cachaças.html" class="banner">Rapaduras</a></span>
							</div>
						</div>
							

						<div class="col-12 container arredondamento">

							<section id='conteudo' class="row my-3 justify-content-around">

								<?php foreach($produtosRapadura as $indice => $produto) { ?>
										
									<article class="row text-center col-md-5 postagem m-3 p-4">
												
										<div class="col-md-11" >
													
											<h2 class="text-danger text-uppercase"><?=$produto->nome?></h2>
													
											<h4 class="lead font-weight-bold text-uppercase"><?=$produto->descricao?></h4>
													
											<p class="lead">
														
												Sabor
														
												<span class="p-1 text-black font-weight-bold"><?=$produto->sabor?></span>
													
											</p>
													
											<button class="btn btn-danger btn-lg">
												<a href="todos_produtos.php?produto=<?=$produto->id?>" class="text-white">Saiba mais ...</a>
											</button>
												
										</div>	
												
										<div class="col-md-11">
											<img src="<?=$produto->img_produto?>" class="col-8 mt-5" width="250" >
										</div>

									</article>

								<?php } ?>

							</section>

						</div>
					
					</section>

					<section class='row bann4 arredondamento mx-auto my-2'>
								
						<div class="col-12 d-flex align-items-center mb-5" style="height: 700px;">
							<div class=" conteudo-titulo w-100 text-center  ">
								<span class="titulo1 p-4"><a href="cachaças.html" class="banner">Melados</a></span>
							</div>
						</div>
							

						<div class="col-12 arredondamento">
							
							<section id="conteudo" class="row justify-content-around arredondamento my-3">

								<?php foreach($produtosMelado as $indice => $produto) { ?>
										
									<article class="row text-center col-md-5 postagem m-3 p-4">
												
										<div class="col-md-11">
													
											<h2 class="text-danger text-uppercase"><?=$produto->nome?></h2>
													
											<h4 class="lead font-weight-bold text-uppercase"><?=$produto->descricao?></h4>

											<p class="lead">
														
												Sabor
												<span class="p-1 text-black  font-weight-bold"><?=$produto->sabor?></span>
													
											</p>
													
											<button class="btn btn-danger btn-lg">
												<a href="todos_produtos.php?produto=<?=$produto->id?>" class="text-white">Saiba mais ...</a>
											</button>
												
										</div>
													
										<div class="col-md-11">
											<img src="<?=$produto->img_produto?>" width="250" class="col-10 mt-5">
										</div>	

									</article>

								<?php } ?>
					
							</section>

						</div>

					</section>

				<?php } ?>



				
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