<?php 

	require 'controler_da_view.php' ; 



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

			<style type="">
				
				.estado {
					font-size: 5em;
					font-family: American;
					background-color: RGB(242, 242, 242, 0.8);
					border-radius: 50px;
					text-transform: uppercase;
					letter-spacing: 5px;
					color: #B43104;
					box-shadow: inset 0 0 1em lightgray, 0 0 1em red;
					opacity: 0;
					animation: opacidade 1s;
					animation-fill-mode: both;

				}

				.legenda {
					font-family: Apple Chancery, cursive;
					font-size: 1.5em;
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

				.bann10 {
					background: url('imagens/fundo2.png');
				}

				.margin {
					margin-top: 100px;
				}



			</style>


		</head>
		
		<body id="contato">

			
			<header id="topo" > <!-- Inicio do topo -->
				
				<?php 
					require_once 'menu.php'
				?>

			</header> <!-- Fim do topo -->

			<section id="banner" class='container-fluid bann10 arredondamento  mx-auto py-5'>  <!-- Inicio Sessão Cachaças -->

				<article class="row align-self-start ">

					<div class="text-danger col-9  mx-auto text-center">
					
						<h2 class="estado text-center my-5">Parceiros</h2>
						<div class="legenda">
							<p class="text-danger">Seja mais um parceiro nosso e tenha os Produtos do Tião em sua loja</p>
							<p class="text-danger">Se cadastre ou entre em contato pelo WhatsApp
								<a href="" class="btn btn-danger">
									<i class="fa-brands fa-whatsapp text-white fa-2x"></i>
								</a>
							</p>
						</div>
					</div>
					
					<form method="POST" action="" class="col-6 mx-auto text-danger">
						
						<div class="form-row">
							
							<div class="form-group col-md-6">
								<label>Seu nome:</label>
								<input class="form-control" type="text" name="nome" placeholder="Coloque seu nome">
							</div>
							<div class="form-group col-md-6">
								<label>Nome da sua loja/comercio:</label>
								<input class="form-control" type="text" name="nome_loja" placeholder="Coloque o nome da sua loja">
							</div>
						</div>

						<div class="form-row">
							
							<div class="form-group col-md-2">
								<label>UF:</label>
								<select class="form-control" name="uf">
									<option>GO</option>
									<option>MT</option>
									<option>BA</option>
								</select>
							</div>
							<div class="form-group col-md-5">
								<label>Cidade:</label>
								<input class="form-control" type="text" name="cidade" placeholder="Sua cidade">
							</div>
							<div class="form-group col-md-5">
								<label>Endereço:</label>
								<input class="form-control" type="text" name="endereco" placeholder="Seu endereço">
							</div>
						</div>

						<div class="d-flex justify-content-center">
							<button class="btn btn-info " type="submit">Cadastrar</button>
						</div>




					</form>


				</article>

				<article class="row align-self-start margin">

					<div class="text-center col-9  mx-auto">
					
						<h2 class="estado text-center my-5">Clientes</h2>
						<div class="legenda">
							<p class="text-danger">Se cadastre para receber as nossas novidades</p>
						</div>
					</div>
					
					<form method="POST" action="" class="col-6 mx-auto text-danger">
						
						<div class="form-row">
							
							<div class="form-group col-12">
								<label>Email:</label>
								<input class="form-control" type="text" name="email" placeholder="Coloque seu email">
							</div>
				
						</div>

						<div class="form-row">
							
							<div class="form-group col-md-3">
								<label>UF:</label>
								<select class="form-control" name="uf">
									<option>GO</option>
									<option>MT</option>
									<option>BA</option>
								</select>
							</div>
							<div class="form-group col-md-9">
								<label>Cidade:</label>
								<input class="form-control" type="text" name="cidade" placeholder="Sua cidade">
							</div>
							
						</div>

						<div class="d-flex justify-content-center">
							<button class="btn btn-info " type="submit">Cadastrar</button>
						</div>




					</form>


				</article>




			</section>


		

				
			<div id="conteudos" class="container-fluid">	<!-- Inicio dos Conteudos -->
				
				
				
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