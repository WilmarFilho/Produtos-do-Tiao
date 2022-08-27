<?php 
	require_once	'controler_da_view.php';
?>
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
			<script src="js/distribuidores.js"></script> <!-- Js custom -->
		</head>

		
		<body id="pagina-distribuidores">
			<header id="topo" > <!-- Inicio do topo -->
				<?php 
				require_once 'menu.php';
				?>
			</header> <!-- Fim do topo -->

			<?php if(true) { ?> 
				<p id='cidade' class="d-none"><?=$_GET['cidade']?></p>
			<?php } ?>

			<article class="container-fluid">	<!-- Titulo Distribuidores -->
				<div style="background: rgb(255,255,255, 0.6);" class='p-3 arredondamento mx-auto mt-2 '>
					<h1 class="tituloDist text-uppercase text-black text-center  display-5 ">Distribuidores</h1>
					<h1 class="custom-font text-uppercase text-danger text-center  display-5 " style="font-size: 5em">Produtos do Tião</h1>
				</div>
			</article> <!-- Fim Titulo Distribuidores -->

				
			<section id="conteudos-distribuidores" class=" my-5 row container-fluid mx-auto " >	<!-- Inicio do Conteudo -->

					<?php if(isset($_GET['cidade']) or isset($_GET['nomeloja']) or isset($_GET['letra'])) { ?> <!-- btn filtro -->
						<div class="d-md-none mr-auto ml-3">
							<button class="btn btn-outline-danger" data-toggle="collapse" data-target="#filtro">
								Filtro
							</button>
						</div>
					<?php } ?>

						
						<div id="filtro" class="col-md-2 filtro collapse d-md-block mx-auto mt-5"> <!-- Filtro -->
							<?php if(isset($_GET['cidade']) or isset($_GET['nomeloja']) or isset($_GET['letra'])) { ?> <!-- nav (procura loja) -->
								<label class="label" >Busque por nome :</label>
								<form class="input-group" method="POST" action="controler_da_view.php?cidade=<?=$_GET['cidade']?>"  >
									<input class="form-control" type="text" name="nomeloja" placeholder="Nome do distribuidor: ">
									<div class="input-group-append" >
										<button class="  btn btn-outline-danger"><i class="fa-solid fa-magnifying-glass"></i></button>
									</div>
								</form>

								<label class=" label">Busque pela primeira letra :</label>

								<nav id="filtro_letra" class="mx-auto"   >
									<ul class="pagination flex-column ">
										<li class="page-item" onclick="anterior()"><span  class="page-link"><i class="fa-solid fa-angles-left"></i></span></li>
										<li class="page-item" onclick="paginacao('1')"><span  class="page-link text-uppercase" id="letra1">a</span></li>
										<li class="page-item" onclick="paginacao('2')"><span  class="page-link  text-uppercase" id="letra2">b</span></li>
										<li class="page-item" onclick="paginacao('3')"><span href="" class="page-link text-uppercase" id="letra3">c</span></li>
										<li class="page-item" onclick="paginacao('4')"><span href="" class="page-link  text-uppercase" id="letra4">d</span></li>
										<li class="page-item" onclick="paginacao('5')"><span href="" class="page-link text-uppercase" id="letra5">e</span></li>
										<li class="page-item" onclick="paginacao('6')"><span href="" class="page-link  text-uppercase" id="letra6">f</span></li>
										<li class="page-item" onclick="paginacao('7')"><span href="" class="page-link  text-uppercase" id="letra7">g</span></li>
										<li class="page-item" onclick="paginacao('8')"><span href="" class="page-link  text-uppercase" id="letra8">h</span></li>
										<li class="page-item" onclick="paginacao('9')"><span href="" class="page-link  text-uppercase" id="letra9">i</span></li>
										<li class="page-item" onclick="paginacao('10')"><span href="" class="page-link text-uppercase" id="letra10">j</span></li>
										<li class="page-item" onclick="paginacao('11')"><span href="" class="page-link  text-uppercase" id="letra11">k</span></li>
										<li class="page-item" onclick="paginacao('12')"><span href="" class="page-link  text-uppercase" id="letra12">l</span></li>
										<li class="page-item" onclick="paginacao('13')"><span href="" class="page-link  text-uppercase" id="letra13">m</span></li>
										<li class="page-item" onclick="proximo()"><span  class="page-link"><i class="fa-solid fa-angles-right"></i></span></li>
									</ul>

									


								</nav>

								<div class="mt-3 d-none d-md-block" >
									<div class="">
										<button onclick="voltar()" class=" btn btn-outline-danger  ">Voltar</button>
									</div>
								</div>

								<?php $total_paginas =  ceil($total_lojas['total'] / 8); ?>


								<?php if($total_paginas >= 2)  { ?>

									<label class="label mt-5 d-none d-md-block">Páginas: </label>

									<nav aria-label="Page navigation example" class=" mx-auto d-none d-md-block">
									  <ul class="pagination flex-column">
									    
									    <li class="page-item"><a class="page-link" href="?cidade=<?=$_GET['cidade']?>&p=1&letra=<?=$_GET['letra']?>&nomeloja=<?=$_GET['nomeloja']?>">Primeira</a></li>
									    
									 
									    <?php for($i = 1; $i <= $total_paginas ; $i++) { ?>
									    	<li class="page-item"><a class="page-link" href="?cidade=<?=$_GET['cidade']?>&p=<?=$i?>&letra=<?=$_GET['letra']?>&nomeloja=<?=$_GET['nomeloja']?>"><?=$i?></a></li>
									   	<?php } ?>
									  
									    
									    <li class="page-item"><a class="page-link" href="?cidade=<?=$_GET['cidade']?>&p=<?=$total_paginas?>&letra=<?=$_GET['letra']?>&nomeloja=<?=$_GET['nomeloja']?>">Ultima</a></li>
									  </ul>
									</nav>

								<?php } ?>

								

							<?php } ?> 
						</div>	 <!-- Fim Filtro -->

					<?php if(isset($_GET['cidade']) or isset($_GET['uf']) or isset($_GET['nomeloja']) or isset($_GET['letra'])) { ?>  <!-- btn voltar -->

						<div class="ml-auto mr-3 d-md-none mt-3" >
							<div class="">
								<button onclick="voltar()" class=" btn btn-outline-danger  ">Voltar</button>
							</div>
						</div>

					<?php } ?>

						<?php if(!isset($_GET['cidade']) and !isset($_GET['nomeloja']) and !isset($_GET['letra'])) { ?> <!-- Estados -->
							<div id='nomes-estados' class="mt-5 col-12 row d-flex justify-content-around text-center mx-auto ">	
										<?php if(!isset($_GET['uf'])) { ?> <!-- Estados -->
											<span onclick="recuperaDistribuidoresEstado('go')" class="banner estado p-3 m-2 mt-5 col-lg-3 col-8">Goiás</span>
											<span onclick="recuperaDistribuidoresEstado('ba')" class="banner estado p-3 m-2 mt-5 col-lg-3 col-8 ">Bahia</span>
											<span onclick="recuperaDistribuidoresEstado('mt')" class="banner estado p-3 m-2 mt-5 col-lg-3 col-8">Mato Grosso</span>
										<?php } ?>

										<?php if(isset($_GET['uf']) and $_GET['uf'] == 'go') { ?> <!-- Cidades -->
											<span onclick="recuperaDistribuidoresCidade('anicuns', 'goias')" class="banner estado p-3 m-2 mt-5  col-lg-3 col-8">Anicuns</span>
											<span onclick="recuperaDistribuidoresCidade('Goiania', 'goias')" class="banner estado p-3 m-2 mt-5  col-lg-3 col-8">Goiânia</span>
											<span onclick="recuperaDistribuidoresCidade('Trindade', 'goias')" class="banner estado p-3 m-2 mt-5  col-lg-3 col-8">Trindade</span>
											<span onclick="recuperaDistribuidoresCidade('aparecida de goiania', 'goias')" class="banner estado p-3 m-2 mt-5  col-lg-3 col-8">Aparecida de Goiânia</span>
											<span  onclick="recuperaDistribuidoresCidade('claudinapolis', 'goias')" class="banner estado p-3 m-2 mt-5  col-lg-3 col-8">Claudinápolis</span>
											<span  onclick="recuperaDistribuidoresCidade('itauçu', 'goias')" class="banner estado p-3 m-2 mt-5  col-lg-3 col-8">Itauçu</span>
										<?php } ?>

										<?php if(isset($_GET['uf']) and $_GET['uf'] == 'mt') { ?> <!-- Cidades -->

											<span onclick="recuperaDistribuidoresCidade('mato', 'mato grosso')" class="banner estado p-3 m-2 mt-5  col-md-3 col-8">Campinapolis</span>
											<span onclick="recuperaDistribuidoresCidade('mato', 'mato grosso')" class="banner estado p-3 m-2 mt-5  col-md-3 col-8">Nova Xavantina</span><

										<?php } ?>

										<?php if(isset($_GET['uf']) and $_GET['uf'] == 'ba') { ?> <!-- Cidades -->

											<span onclick="recuperaDistribuidoresCidade('porto', 'bahia')" class="banner estado p-3 m-2 mt-5  col-md-3 col-8">Porto Seguro</span>
											<span onclick="recuperaDistribuidoresCidade('ilheus', 'bahia')" class="banner estado p-3 m-2 mt-5  col-md-3 col-8">ilheus</span><

										<?php } ?>
							</div>
						<?php  } ?> <!-- Fim Estados -->

					<?php if( isset($_GET['cidade']) or isset($_GET['nomeloja']) or isset($_GET['letra'])) { ?> 

						<div id="aba-lojas"  class="col-md-10 col-12 animacao row  mt-5  mx-auto"> <!-- Inicio Lojas -->

								<?php if(isset($_GET['letra']) and $_GET['letra'] == '*') { ?>

									<?php foreach ($lojas as $indice => $loja) { ?>

											<div class="col-6 col-md-3 " > <!-- Sem filtro letra -->
												<div class="border border-danger    card arredondamento class-card " style="">
												  
													<div class="p-1 m-1">

													  <img class="card-img-top arredondamento " src="<?=$loja->img?>"  alt="">
													  
														<div class="card-body">
													    
														    <h5 class="card-title h5-card text-danger text-center text-uppercase  "><?= $loja->nome ?></h5>


														    
														    <div class="mt-4 pb-3 d-flex flex-column ">

															     <h5 class=" " style="font-family: Apple Chancery, cursive; font-size: 1.3em;">Endereço :</h5>

																 <p class="  lead " style="font-size: 1.2em"><?= $loja->endereço ?></p>
															</div>
													    
														</div>

													</div>

												</div> 
											</div>		

					<?php } ?> <?php } ?> <?php } ?> 

					<?php if(isset($_GET['cidade']) or isset($_GET['nomeloja']) or isset($_GET['letra']) and empty($lojas)) { ?>
						<?php if(empty($lojas)) { ?>
							<div class="mx-auto text-center">
								<h1 class="h1-erro"> Atualmente não temos nenhum distribuidor dessa cidade cadastrado <i class="fa-solid fa-circle-exclamation"></i></h1>
								<h3 class="h3-erro">Volte mais tarde.</h3>
								<button onclick="voltar()" class=" btn btn-warning  ">Voltar </button>
							</div>
								

					<?php  } ?> <?php  } ?> 


							<?php  if (isset($_GET['letra']) and $_GET['letra'] != '*') { ?>
								
								<?php foreach ($lojas as $indice => $loja) { ?>

									<?php if( substr($loja->nome, 0, 1) == $_GET['letra']) { ?>
										
										<div class="col-6 col-md-3 p-2"> <!-- Com filtro letra -->
							
											<div class="border border-danger    card arredondamento class-card " style="">
											  
												<div class="p-1 m-1">

												  <img class="pt-2 card-img-top arredondamento " src="<?=$loja->img?>"  alt="">
												  
													<div class="card-body">
												    
													    <h5 class="card-title h5-card text-danger text-center text-uppercase "><?= $loja->nome ?></h5>


													    
													    <div class="mt-4 pb-3 card-text text-center">

														    <h5 class=" " style="font-family: Apple Chancery, cursive; font-size: 1.3em;">Endereço :</h5>

														    <p class="  lead " style="font-size: 1.2em"><?= $loja->endereço ?></p>

														</div>
												    
													</div>

												</div>

											</div> 

										</div>

							<?php } ?> <?php } ?>  <?php } ?>

								<?php if($total_paginas >= 2)  { ?>

									<div class="row col-12">

										<label class="label mt-5 d-md-none col-12 text-center">Páginas: </label>

										<nav aria-label="Page navigation example " class="col-10 d-md-none ml-5">
										  <ul class="pagination flex-column mt-5">
										    
										    <li class="page-item"><a class="page-link" href="?cidade=<?=$_GET['cidade']?>&pagina=1&letra=<?=$_GET['letra']?>&nomeloja=<?=$_GET['nomeloja']?>">Primeira</a></li>
										    
										 
										    <?php for($i = 1; $i <= $total_paginas ; $i++) { ?>
										    	<li class="page-item"><a class="page-link" href="?cidade=<?=$_GET['cidade']?>&p=<?=$i?>&letra=<?=$_GET['letra']?>&nomeloja=<?=$_GET['nomeloja']?>"><?=$i?></a></li>
										   	<?php } ?>
										  
										    
										    <li class="page-item"><a class="page-link" href="?cidade=<?=$_GET['cidade']?>&p=<?=$total_paginas?>&letra=<?=$_GET['letra']?>&nomeloja=<?=$_GET['nomeloja']?>">Ultima</a></li>
										  </ul>
										</nav>

									</div>

								<?php } ?>
							
						</div> <!-- Fim Lojas -->	



			</section> <!-- Fim do Conteudo -->

			<!-- Rodape -->
				<?php 
					require_once 'rodape.php'
				?>
			<!-- Fim rodape -->

			<!-- Optional JavaScript 
    		jQuery first, then Popper.js, then Bootstrap JS  -->
   			<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
   			<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
   			<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

		</body>
	</html>
