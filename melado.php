<!DOCTYPE html>
	<html>
		
		<head lang="pt-br">
			
			<!-- Meta tags -->

			<meta charset="utf-8">
			
			<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
			
			<title>Produtos do Tião - Melado</title>
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

			<br><br><br><br><br><br><br>

				
			<div id="produtos" class="container-fluid my-5">	<!-- Inicio dos Conteudos -->
				
				<div class="row text-center">
					
					<div class="col-md-4">
							
						<div>

							<h2 class="text-danger">Melado do tião</h2>
							<h3 class="text-success">Puro</h3>

						</div>

					</div>

					<div class="col-md-4">
						<img src="imagens/melado.png" class="img-fluid">
					</div>

					<div class="col-md-4  ">
						
						<div class="row justify-content-center">
							
							<img src="imagens/rapadura/img1.jpeg" class="col-md-6">
							<img src="imagens/rapadura/img2.jpeg" class="col-md-6">
							

						</div>

					</div>

				</div>
				
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