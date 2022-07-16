<?php
	require_once	'controler_da_view.php';
?>
	<html>
		
		<head lang="pt-br">	
			<meta charset="utf-8"> <!-- Meta tags -->
			<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
			<title>Produtos do Tião - Produto</title>
			<link rel="icon" href="imagens/favicon.jpg">
			<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous"> <!-- Bootstrap4 -->
			<link rel="stylesheet" type="text/css" href="estilos/estilos_custom.css">  <!-- Estilo custom -->
			<link rel="stylesheet" type="text/css" href="estilos/normalize.css"> <!-- Normalize -->
			<!--[if lt IE 9]>
				<script src="Js/html5shiv.js"></script>
			<![endif]-->
			<script src="https://kit.fontawesome.com/9d7842dfbe.js" crossorigin="anonymous"></script> <!-- Icones -->
		</head>
		
		<body id="pagina-todos-produtos">
			<header id="topo" > <!-- Inicio do topo -->
				<?php 
					require_once 'menu.php'
				?>
			</header> <!-- Fim do topo -->
				
			<div id="todos-produtos" class="container-fluid ">	<!-- Inicio do Conteudo do Produto -->
				<?php foreach($produtos as $indice => $produto) {  ?>
					<?php if($produto->id == $_GET['produto']) { ?>
						<div class="row text-center">
							<div class="col-md-12 my-5">	
								<div>
									<h2 class="text-danger custom-font"><?=$produto->nome?></h2>
									<h3 class="text-warning"><?=$produto->sabor?></h3>
								</div>
							</div>

							<div class="col-md-12">
								<img src="<?=$produto->img_produto?>">
							</div>

							<div class="col-md-4  ">
								<div class="row justify-content-center">
								</div>
							</div>
						</div>
					<?php } ?>
				<?php } ?>
			</div> <!-- Fim do Conteudo do Produto -->

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