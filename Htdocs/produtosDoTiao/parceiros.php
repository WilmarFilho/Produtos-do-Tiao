<?php 
	require_once	'controler_da_view.php';
?>


	<html>
		
		<head lang="pt-br">
			
			<!-- Meta tags -->

			<meta charset="utf-8">
			
			<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
			
			<title>Produtos do Tião - Contato</title>
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

			<style type="text/css">
				.filtro {
					height: 100%;
					border-right: 5px solid lightcyan;
				}

					.estado {
						font-size: 5em;
						font-family: American;
						background-color: rgba(255, 255, 255, 0.8);
						border-radius: 50px;
						text-transform: uppercase;
						letter-spacing: 5px;
						color: #B43104;
						cursor: pointer;
						box-shadow: inset 0 0 1em lightgray, 0 0 1em red;
						opacity: 0;
						animation: opacidade 1s;
						animation-fill-mode: both;

					}



			</style>
		

			<script>



				
				
				

				let voltar = () => {
					window.location.href = 'parceiros.php'
				}

				let requisição = (url) => {
					
					/*ajax.open('GET', url)
					ajax.send()
					console.log(ajax)


					ajax.onreadystatechange = () => {
						if(ajax.readyState == 4 && ajax.status == 200) {
							$('#estados').html(ajax.responseText)
						}
					}
					*/

					/*$('#legenda').html('Escolha sua cidade :')

					$('#banner').removeClass('bann1')
					$('#banner').addClass('bann2')*/

				}

				let recuperaDistribuidoresEstado = (uf) => {
					window.location.href = 'parceiros.php?uf=' + uf 
				}

				let recuperaDistribuidoresCidade = (cidade, estado) => {
					window.location.href = 'parceiros.php?cidade=' + cidade 
				}

				let paginacao = (id) => {

					let indice = 'letra' + id
					let cidade = document.getElementById('cidade').innerHTML
					
					let letra = document.getElementById(indice).innerHTML 
				
					window.location.href = 'parceiros.php?letra=' + letra + '&cidade=' + cidade
				}

				let proximo = () => {

						document.getElementById('letra1').innerHTML = 'n'
						document.getElementById('letra2').innerHTML = 'o'
						document.getElementById('letra3').innerHTML = 'p'
						document.getElementById('letra4').innerHTML = 'q'
						document.getElementById('letra5').innerHTML = 'r'
						document.getElementById('letra6').innerHTML = 's'
						document.getElementById('letra7').innerHTML = 't'
						document.getElementById('letra8').innerHTML = 'u'
						document.getElementById('letra9').innerHTML = 'v'
						document.getElementById('letra10').innerHTML = 'w'
						document.getElementById('letra11').innerHTML = 'x'
						document.getElementById('letra12').innerHTML = 'y'
						document.getElementById('letra13').innerHTML = 'z'

				}

				let anterior = () => {
						document.getElementById('letra1').innerHTML = 'a'
						document.getElementById('letra2').innerHTML = 'b'
						document.getElementById('letra3').innerHTML = 'c'
						document.getElementById('letra4').innerHTML = 'd'
						document.getElementById('letra5').innerHTML = 'e'
						document.getElementById('letra6').innerHTML = 'f'
						document.getElementById('letra7').innerHTML = 'g'
						document.getElementById('letra8').innerHTML = 'h'
						document.getElementById('letra9').innerHTML = 'i'
						document.getElementById('letra10').innerHTML = 'j'
						document.getElementById('letra11').innerHTML = 'k'
						document.getElementById('letra12').innerHTML = 'l'
						document.getElementById('letra13').innerHTML = 'm'
				}

			</script>


		</head>
		
		<body id="contato" style="background: url(imagens/back.jpg);">

			
			<header id="topo" > <!-- Inicio do topo -->
				
				<?php 
				
					require_once 'menu.php';
					
				?>

			</header> <!-- Fim do topo -->

			<?php if(true) { ?> 

				<p id='cidade' class="d-none"><?=$_GET['cidade']?></p>

				
			
			<?php } ?>


			<div class="container-fluid">	<!-- Titulo Distribuidores -->

				<section style="background: rgb(255,255,255, 0.6);" class='p-3 arredondamento mx-auto mt-2 '>

					<h1 class="tituloDist text-uppercase text-danger text-center  display-5 ">Distribuidores</h1>

					<h1 class="tituloDist text-uppercase text-danger text-center  display-5 ">Produtos do Tião</h1>

				</section>

			</div>

				
			<div id="conteudos" class="container-fluid my-5">	<!-- Inicio do Conteudo -->

				<section id="banner" class='container-fluid arredondamento mx-auto'> 

					<article class="row mb-5  ">

						<div class="col-md-2   d-none d-md-block filtro "  >

							

							<?php if(isset($_GET['cidade']) or isset($_GET['nomeloja']) or isset($_GET['letra'])) { ?> <!-- nav (procura loja) -->

								<label class="text-center">Busque por nome :</label>
								<form class="input-group" method="GET" action=""  >

									<input class="form-control" type="text" name="nomeloja" placeholder="Nome do distribuidor: ">
									<div class="input-group-append" >
										
										<button class="  btn btn-info"><i class="fa-solid fa-magnifying-glass"></i></button>
									</div>
								</form>

								<label>Busque pela primeira letra :</label>

								<nav id="filtro_letra" class=""  >
									<ul class="nav flex-column">
										<li class="" onclick="anterior()"><span  class=""><i class="fa-solid fa-angles-left"></i></span></li>
										<li class="" onclick="paginacao('1')"><span  class=" text-uppercase" id="letra1">a</span></li>
										<li class="" onclick="paginacao('2')"><span  class="  text-uppercase" id="letra2">b</span></li>
										<li class="" onclick="paginacao('3')"><span href="" class=" text-uppercase" id="letra3">c</span></li>
										<li class="" onclick="paginacao('4')"><span href="" class="  text-uppercase" id="letra4">d</span></li>
										<li class="" onclick="paginacao('5')"><span href="" class=" text-uppercase" id="letra5">e</span></li>
										<li class="" onclick="paginacao('6')"><span href="" class="  text-uppercase" id="letra6">f</span></li>
										<li class="" onclick="paginacao('7')"><span href="" class="  text-uppercase" id="letra7">g</span></li>
										<li class="" onclick="paginacao('8')"><span href="" class="  text-uppercase" id="letra8">h</span></li>
										

									

									
										
										<li class="" onclick="paginacao('9')"><span href="" class="  text-uppercase" id="letra9">i</span></li>
										<li class="" onclick="paginacao('10')"><span href="" class=" text-uppercase" id="letra10">j</span></li>
										<li class="" onclick="paginacao('11')"><span href="" class="  text-uppercase" id="letra11">k</span></li>
										<li class="" onclick="paginacao('12')"><span href="" class="  text-uppercase" id="letra12">l</span></li>
										<li class="" onclick="paginacao('13')"><span href="" class="  text-uppercase" id="letra13">m</span></li>
										<li class="" onclick="proximo()"><span  class=""><i class="fa-solid fa-angles-right"></i></span></li>
										

									</ul>


								</nav>

								

								<?php if(isset($_GET['cidade']) or isset($_GET['uf']) or isset($_GET['nomeloja']) or isset($_GET['letra'])) { ?>  <!-- btn voltar -->

									<div class="" >
										<div class="">
											<button onclick="voltar()" class=" btn btn-info  ">Voltar</button>
										</div>
									</div>

								<?php } ?>

							<?php } ?>

						</div>	

						<?php if(!isset($_GET['cidade']) and !isset($_GET['nomeloja']) and !isset($_GET['letra'])) { ?>

						
						


							<div id='estados' class="mt-5 col-12 row d-flex justify-content-around text-center  ">
										
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
									
									<?php } ?>

									<?php if(isset($_GET['uf']) and $_GET['uf'] == 'mt') { ?> <!-- Cidades -->

										<span onclick="recuperaDistribuidoresCidade('mato', 'mato grosso')" class="banner estado p-3 m-2 mt-5  col-md-3 col-8">Campinas</span>
										<span onclick="recuperaDistribuidoresCidade('mato', 'mato grosso')" class="banner estado p-3 m-2 mt-5  col-md-3 col-8">Belem</span><

									<?php } ?>

									<?php if(isset($_GET['uf']) and $_GET['uf'] == 'ba') { ?> <!-- Cidades -->

										<span onclick="recuperaDistribuidoresCidade('porto', 'bahia')" class="banner estado p-3 m-2 mt-5  col-md-3 col-8">Porto Seguro</span>
										<span onclick="recuperaDistribuidoresCidade('ilheus', 'bahia')" class="banner estado p-3 m-2 mt-5  col-md-3 col-8">ilheus</span><

									<?php } ?>


							</div>


						<?php  } ?>

						<div  class="col-md-10 col-12 animacao row justify-content-around mt-5  " >
						
							
							<?php if( isset($_GET['cidade']) or isset($_GET['nomeloja']) or isset($_GET['letra'])) { ?> <!-- Inicio Lojas -->

								<?php if(!isset($_GET['letra'])) { ?>

									<?php foreach ($lojas as $indice => $loja) { ?>

									<div class="col-10 col-md-3 p-2">
							
										<div class="border border-danger    card arredondamento class-card " style="">
										  
											<div class="p-1 m-1">

											  <img class="pt-2 card-img-top arredondamento " src="<?=$loja->img?>"  alt="">
											  
												<div class="card-body">
											    
												    <h5 class="card-title h3 text-danger text-center text-uppercase titulo-card "><?= $loja->nome ?></h5>


												    
												    <div class="mt-4 pb-3 d-flex">

													     <h5 class=" " style="font-family: Apple Chancery, cursive; font-size: 1.3em;">Endereço :</h5>

														 <p class="  lead " style="font-size: 1.2em"><?= $loja->endereço ?></p>
													</div>
											    
												</div>

											</div>

										</div>

									</div>




								


									

							<?php } ?> <?php } ?> <?php } ?>


							<?php  if (isset($_GET['letra'])) { ?>
								

								<?php foreach ($lojas as $indice => $loja) { ?>

									<?php if( substr($loja->nome, 0, 1) == $_GET['letra']) { ?>
										
										<div class="col-6 col-md-3 p-2">
							
											<div class="border border-danger    card arredondamento class-card " style="">
											  
												<div class="p-1 m-1">

												  <img class="pt-2 card-img-top arredondamento " src="<?=$loja->img?>"  alt="">
												  
													<div class="card-body">
												    
													    <h5 class="card-title h3 text-danger text-center text-uppercase titulo-card "><?= $loja->nome ?></h5>


													    
													    <div class="mt-4 pb-3 card-text text-center">

														    <h5 class=" " style="font-family: Apple Chancery, cursive; font-size: 1.3em;">Endereço :</h5>

														    <p class="  lead " style="font-size: 1.2em"><?= $loja->endereço ?></p>

														</div>
												    
													</div>

												</div>

											</div>

										</div>

							<?php } ?> <?php } ?>  <?php } ?>
							
						</div>

					</article>

				</section> 

				
			</div> <!-- Fim do Conteudo -->

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