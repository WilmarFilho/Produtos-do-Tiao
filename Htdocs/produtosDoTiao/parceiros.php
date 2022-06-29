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
			<link rel="stylesheet" type="text/css" href="estilos/css-b.css">

			<!-- Normalize -->
			<link rel="stylesheet" type="text/css" href="estilos/normalize.css">

			<!--[if lt IE 9]>
				<script src="Js/html5shiv.js"></script>
			<![endif]-->

			<!-- Icones -->
			<script src="https://kit.fontawesome.com/9d7842dfbe.js" crossorigin="anonymous"></script>

			<!-- Jquerry -->

			<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

			<script>

				$(document).ready(() => {
					
				})
				
				let ajax = new XMLHttpRequest()

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


					window.location.href = 'parceiros.php?uf=' + url 

				}

				let recuperaLojas = (cidade, estado) => {
					window.location.href = 'parceiros.php?cidade=' + cidade 
				}



			</script>

			<style type="text/css">
				
				.legenda_estado {
					font-family: Apple Chancery, cursive;
					font-weight: bolder;
					font-size: 5em;
					color: darkred;


				}

				.estado {
					font-size: 5em;
					font-family: American;
					background-color: RGB(242, 242, 242, 0.8);
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

				.estado:hover {
					color: darkred;
				}

				@keyframes opacidade {
					to {
						opacity: 1;
					}
				}

				.animacao {
					opacity: 0;
					animation: opacidade 1s;
					animation-fill-mode: both;
				}

				.class-card {
					background-color: rgb(255, 255, 255, 0.8);
				}

				.titulo-card {
					font-family: American;
					font-size: 4em;
					letter-spacing: 4;
				}

				


			</style>


		</head>
		
		<body id="contato">

			
			<header id="topo" > <!-- Inicio do topo -->
				
				<?php 
				
					require_once 'menu.php';
					
				?>

			</header> <!-- Fim do topo -->


			

				
			<div id="conteudos" class="container-fluid">	<!-- Inicio dos Conteudos -->


				<section id="banner" class='bann1 arredondamento row mx-auto'>  <!-- Inicio Sessão Cachaças -->

					<article class="row col-12 d-flex align-items-start pl-5 pt-4 mb-5" style="">

						<div class="text-center">
							<button onclick="voltar()" class="btn btn-info btn-sm ">Voltar</button>
						</div>

						<?php if(isset($_GET['cidade']) or isset($_GET['nomeloja'])) { ?>

							<form class="ml-auto" method="GET" action="">
								<div class="form-inline">
									<input class="form-control" type="text" name="nomeloja" placeholder="Procure alguma loja: ">
									<button class=" form-control btn btn-info"><i class="fa-solid fa-magnifying-glass"></i></button>
								</div>
							</form>

						<?php } ?>

						<?php if(!isset($_GET['cidade']) and !isset($_GET['nomeloja'])) { ?>
						
							
							<!-- <div class="col-12 text-center">
								<h2 style="" id="legenda" class="legenda_estado ">Escolha seu estado :</h2>
								
							</div> -->


							<div id='estados' class="mt-5 row w-100 d-flex justify-content-around  ">
									
								<?php if(!isset($_GET['uf'])) { ?>

									<span onclick="requisição('go')" class="banner estado p-3 m-2">Goiás</span>
									<span onclick="requisição('ba')" class="banner estado p-3 m-2">Bahia</span>
									<span onclick="requisição('mt')" class="banner estado p-3 m-2">Mato Grosso</span>

								<?php } ?>

								<?php if(isset($_GET['uf']) and $_GET['uf'] == 'go') { ?>
									
									<span onclick="recuperaLojas('anicuns', 'goias')" class="banner estado p-3 m-2">Anicuns</span>
									<span onclick="recuperaLojas('Goiania', 'goias')" class="banner estado p-3 m-2">Goiania</span>
									<span onclick="recuperaLojas('Trindade', 'goias')" class="banner estado p-3 m-2">Trindade</span>
								
								<?php } ?>

								<?php if(isset($_GET['uf']) and $_GET['uf'] == 'mt') { ?>

									<span onclick="recuperaLojas('mato', 'mato grosso')" class="banner estado p-3 m-2">Campinas</span>
									<span onclick="recuperaLojas('mato', 'mato grosso')" class="banner estado p-3 m-2">Belem</span><

								<?php } ?>

								<?php if(isset($_GET['uf']) and $_GET['uf'] == 'ba') { ?>

									<span onclick="recuperaLojas('porto', 'bahia')" class="banner estado p-3 m-2">Porto Seguro</span>
									<span onclick="recuperaLojas('ilheus', 'bahia')" class="banner estado p-3 m-2">ilheus</span><

								<?php } ?>


							</div>


						<?php  } ?>

						<div class="animacao row justify-content-around mt-5">
						
							
							<?php if(isset($_GET['cidade']) or isset($_GET['nomeloja'])) { ?>

								


								<?php foreach ($lojas as $indice => $loja) { ?>
							
								<div class="border border-danger col- 11 col-md-5 m-1 card arredondamento class-card " style="">
								  
									<div class="p-1 m-1">

									  <img class="pt-2 card-img-top arredondamento " src="<?=$loja->img?>"  alt="">
									  
										<div class="card-body">
									    
										    <h5 class="card-title h3 text-danger text-center text-uppercase titulo-card "><?= $loja->nome ?></h5>


										    
										    <div class="mt-4 pb-3 d-flex">

											    <h5 class="float-right " style="font-family: Apple Chancery, cursive; font-size: 2em;">Endereço :</h5>

											    <p class="float-left ml-auto card-text lead legenda_estado"><?= $loja->endereço ?></p>

											</div>
									    
										</div>

									</div>

								</div>

							<?php } ?> <?php } ?>

							
							

							

							

						</div>

					</article>

				</section>  <!-- Fim Sessão Cachaças -->
				
				
				
			</div> <!-- Fim dos Conteudos -->

				<?php 
					require_once 'rodape.php'
				?>

			<!-- Optional JavaScript 
    		jQuery first, then Popper.js, then Bootstrap JS  -->
   			<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
   			<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
   			<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

		</body>

	</html>