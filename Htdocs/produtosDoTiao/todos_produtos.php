<?php
	
	
	require_once	'controler_da_view.php';

		


	

?>
	<html>
		
		<head lang="pt-br">
			
			<!-- Meta tags -->

			<meta charset="utf-8">
			
			<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
			
			<title>Produtos do Tião - Caninha do Tião Ouro</title>
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

				<?php foreach($produtos as $indice => $produto) {  ?>

					<?php if($produto->id == $_GET['produto']) { ?>
				
						<div class="row text-center">
							
							<div class="col-md-6">
									
								<div>

									<h2 class="text-danger"><?=$produto->nome?></h2>
									<h3 class="text-warning"><?=$produto->sabor?></h3>

								</div>

							</div>

							<div class="col-md-6">
								<img src="<?=$produto->img_produto?>">
							</div>

							<div class="col-md-4  ">
								
								<div class="row justify-content-center">
									
									

								</div>

							</div>

						</div>

					<?php } ?>

				<?php } ?>
				
			</div> <!-- Fim dos Conteudos -->

				<?php 
					require_once 'rodape.php'
				?>
		</body>

	</html>