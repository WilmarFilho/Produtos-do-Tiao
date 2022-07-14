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
			<link rel="stylesheet" type="text/css" href="estilos/estilos_custom.css"> 
			
			<!-- Normalize -->
			<link rel="stylesheet" type="text/css" href="estilos/normalize.css">

			<!--[if lt IE 9]>
				<script src="Js/html5shiv.js"></script>
			<![endif]-->

			<!-- Icones -->
			<script src="https://kit.fontawesome.com/9d7842dfbe.js" crossorigin="anonymous"></script>



		</head>
		
		<body id="pagina-produtos" style="background: url(imagens/back.jpg);">

			
			<header id="topo" > <!-- Inicio do topo -->
				
				<?php 
					require_once 'menu.php'
				?>


			</header> <!-- Fim do topo -->


			
				
			<div id="" class="container-fluid">	<!-- Inicio dos Conteudos -->
				
				<?php if($_GET['mostra'] == 'cachaça' or $_GET['mostra'] == 'todos' ) { ?>

							<section  class='bann5 titulo-conteudo   mb-5 d-flex align-items-center justify-content-center mt-5'>  <!-- Inicio Sessão Cachaças -->
							
									<article>
											
											<h1 class="titulo1"><a href="produtos.php?mostra=doce" class="banner">Pingas </a></h1>
										
										
									</article>

							</section>  <!-- Fim Sessão Cachaças -->

								
						
							

						

							<section class="bann1  row my-3 justify-content-around" >
										
								<?php 

									foreach($produtosPinga as $indice => $produto) {  ?>
										<div class="col-md-5 col-5">
											<article class="row  text-center   postagem my-3 p-1" >
														
												<div class="col-lg-7 col-12 p-3">
															
													
														
														<h2 class="h2-produto text-danger text-uppercase"><?=$produto->nome?></h2>
																
														<h4 class="h4-produto lead font-weight-bold text-uppercase"><?=$produto->descricao?></h4>
																
														<p class=" p-produto">
																	
															Sabor
															<span class="text-capitalize p-1 text-black  font-weight-bold"><?=$produto->sabor?></span>

														</p>
																
														<button class="btn btn-danger btn-sm button-produto">
															<a href="todos_produtos.php?produto=<?=$produto->id?> " class="text-white">Saiba mais ...</a>
														</button>

												
														
												</div>	
														
												<div class="col-lg-4 ml-auto col-12 ">
													<img class = "img-produto img-fluid" src="<?=$produto->img_produto?>"   >
												</div>

											</article> 
										</div>
								<?php } ?>

							</section>

					

			</div>	

			<section  class='bann5 titulo-conteudo   mb-5 d-flex align-items-center justify-content-center mt-5'>  <!-- Inicio Sessão Cachaças -->
							
									<article>
											
											<h1 class="titulo1"><a href="produtos.php?mostra=doce" class="banner">licores </a></h1>
										
										
									</article>

							</section>  <!-- Fim Sessão Cachaças -->

			<div id="conteudos" class="container-fluid">	<!-- Inicio dos Conteudos -->

				
							
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
																
														<button class="btn btn-danger btn-sm button-produto">
															<a href="todos_produtos.php?produto=<?=$produto->id?> " class="text-white">Saiba mais ...</a>
														</button>

												
														
												</div>	
														
												<div class="col-lg-4 ml-auto col-12 ">
													<img class = "img-produto img-fluid" src="<?=$produto->img_produto?>"   >
												</div>

											</article> 
										</div>

								<?php } ?>
							
							</section>

						
					
					

				<?php } ?>

			</div>

			

			<div id="conteudos" class="container-fluid">	<!-- Inicio dos Conteudos -->

				

				<?php if($_GET['mostra'] == 'doce' or $_GET['mostra'] == 'todos' ) { ?>

				
							<section  class='bann5 titulo-conteudo   mb-5 d-flex align-items-center justify-content-center mt-5'>  <!-- Inicio Sessão Cachaças -->
							
									<article>
											
											<h1 class="titulo1"><a href="produtos.php?mostra=doce" class="banner">rapaduras </a></h1>
										
										
									</article>

							</section>  <!-- Fim Sessão Cachaças -->
									
							

						

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
																
														<button class="btn btn-danger btn-sm button-produto">
															<a href="todos_produtos.php?produto=<?=$produto->id?> " class="text-white">Saiba mais ...</a>
														</button>

												
														
												</div>	
														
												<div class=" col-12 col-md-8 mx-auto ">
													<img class = "img-rap img-fluid" src="<?=$produto->img_produto?>"   >
												</div>

											</article> 
										</div>

								<?php } ?>

							</section>

						

			</div>

			<section  class='bann5 titulo-conteudo   mb-5 d-flex align-items-center justify-content-center mt-5'>  <!-- Inicio Sessão Cachaças -->
							
									<article>
											
											<h1 class="titulo1"><a href="produtos.php?mostra=doce" class="banner">melados </a></h1>
										
										
									</article>

							</section>  <!-- Fim Sessão Cachaças -->

			<div id="" class="container-fluid">	<!-- Inicio dos Conteudos -->

				
								
						
							

						
							
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
																
														<button class="btn btn-danger btn-sm button-produto">
															<a href="todos_produtos.php?produto=<?=$produto->id?> " class="text-white">Saiba mais ...</a>
														</button>

												
														
												</div>	
														
												<div class=" mx-auto col-12 ">
													<img class = "img-produto img-fluid" src="<?=$produto->img_produto?>"   >
												</div>

											</article> 
										</div>

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