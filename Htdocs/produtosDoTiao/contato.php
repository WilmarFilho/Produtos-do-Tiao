<?php 
	require 'controler_da_view.php' ; 
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
			<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script> <!--Jquery-->
			<script src="js/form.js"></script> <!-- js do form -->
			
		</head>

		<body id="pagina-contato">
			<header id="topo" > <!-- Inicio do topo -->
				<?php 
					require_once 'menu.php'
				?>
			</header> <!-- Fim do topo -->

			<section id="formularios" class='mx-auto py-3'>  <!-- Forms -->
				<article class="row mx-auto"> <!-- Form pra distribuidores -->
					<div class=" col-12 mx-auto text-center row justify-content-center" >
						<div class=" col-12 mb-5" >
							<h2 class="legenda-titulo"  >Distribuidores</h2>
						</div>
						<div class="legenda col-9 col-md-6" >
							<p class="">Seja mais um parceiro nosso e tenha os Produtos do Tião em sua loja</p>
							<p class="">Se cadastre ou entre em contato pelo WhatsApp
								<a href="" class="btn btn-danger">
									<i class="fa-brands fa-whatsapp text-white fa-2x"></i>
								</a>
							</p>
						</div>
					</div>
					<form method="POST" action="" class="col-9 mx-auto text-black-50 mt-5 py-3" style="border-bottom: 3px solid red">
						<div class="form-row">
							<div id="form-nome" class="form-group col-md-6">
								<label>Seu nome:</label>
								<input onkeyup="verificacampo('label-n', 'campo-n')" id='campo-n' class="form-control custom-form" type="text" name="nome" placeholder="Coloque seu nome">
								<small  id="label-n"  class="form-text text-muted" style="font-size: 1.1em"></small>
							</div>
							<div id="form-loja" class="form-group col-md-6">
								<label>Nome da sua loja/comercio:</label>
								<input onkeyup="verificacampo('label-j', 'campo-j')" id='campo-j' class="form-control" type="text" name="nome_loja" placeholder="Coloque o nome da sua loja">
								<small  id="label-j"  class="form-text text-muted" style="font-size: 1.1em"></small>
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
								<input onkeyup="verificacampo('label-c', 'campo-c')" id="campo-c" class="form-control" type="text" name="cidade" placeholder="Sua cidade">
								<small  id="label-c"  class="form-text text-muted" style="font-size: 1.1em"></small>
							</div>
							<div class="form-group col-md-5">
								<label>Endereço:</label>
								<input onkeyup="verificacampo('label-e', 'campo-e')" id="campo-e" class="form-control" type="text" name="endereco" placeholder="Seu endereço">
								<small  id="label-e"  class="form-text text-muted" style="font-size: 1.1em"></small>
							</div>
						</div>
						<div class="d-flex justify-content-center">
							<button id="btn" class="btn btn-danger " type="submit">Cadastrar</button>
						</div>
						
						<?php 
							$titulo = '';
							$texto = '';
							$class_t = '';
							$class_p = 'text-dark';
							

							if ($_GET['inserir'] == 'falha1') {
								$titulo = 'Erro no cadastro !';
								$class_t = 'text-danger';
								$texto = 'Sua loja já está cadastrada no nosso sistema';
								
							}

							if ($_GET['inserir'] == 'falha2') {
								$titulo = 'Erro no cadastro !';
								$class_t = 'text-danger';
								$texto = 'Você já se cadastro na lista de contato, aguarde !';
							}

							if ($_GET['inserir'] == 'sucesso') {
								$titulo = 'Cadastrado com sucesso';
								$class_t = 'text-success';
								$texto = 'Agora é so esperar pelo nosso contato !';
							}

							if ($_GET['inserir'] == 'sucesso1') {
								$titulo = 'Mensagem enviada !';
								$class_t = 'text-success';
								$texto = 'Sua mensagem foi enviada com sucesso';
							}

							if ($_GET['inserir'] == 'falha3') {
								$titulo = 'Já recebemos uma mensagem sua !';
								$class_t = 'text-danger';
								$texto = 'Aguarde para mandar outras mensagens';
							}

							if ($_GET['inserir'] == 'invalido' or $_GET['inserir'] == 'invalido1') {
								$titulo = 'Preencha corretamente os campos !';
								
							}
						?>
						
						
						<?php if ($_GET['inserir'] == 'falha1' or $_GET['inserir'] == 'falha2' or $_GET['inserir'] == 'sucesso' or $_GET['inserir'] == 'sucesso1' or $_GET['inserir'] == 'falha3' or $_GET['inserir'] == 'invalido1' or $_GET['inserir'] == 'invalido') {  ?>	
							<!-- Modal -->
							<div class="modal fade" id="modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
							  <div class="modal-dialog" role="document">
							    <div class="modal-content">
							      <div class="modal-header">
							        <h5 class="modal-title <?= $class_t ?> " id="exampleModalLabel"><?= $titulo ?></h5>
							        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
							          <span aria-hidden="true">&times;</span>
							        </button>
							      </div>
							      <div class="modal-body <?= $class_p ?> text-center">
							        <?= $texto ?>
							      </div>
							      <div class="modal-footer">
							        <button onclick="window.location.href = 'contato.php?inserir=sim'" type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
							        <button onclick="window.location.href = 'contato.php?inserir=sim'" type="button" class="btn btn-primary">Continuar</button>
							      </div>
							    </div>
							  </div>
							</div>

						<?php } ?>
					</form>
				</article> <!-- Fim Form pra distribuidores -->

				<article class="row margin mx-auto"> <!-- Form pra clientes -->
					<div class=" col-12 mx-auto text-center row justify-content-center">
						<h2 class="legenda-titulo  my-5 p-3 px-5 col-11 col-md-6 text-danger">Fale Conosco</h2>
						<div class="legenda col-9 col-md-11">
							<p class="">Formulário para contato </p>
						</div>
					</div>
					<form method="POST" action="" class="col-9 mx-auto text-black-50 mt-5 py-3" style="border-bottom: 3px solid red">
						<div class="form-row">
							<div class="form-group col-12">
								<label>Email:</label>
								<input onkeyup="verificacampo('label-ee', 'campo-ee')" id="campo-ee" class="form-control" type="email" name="email" placeholder="Coloque seu email">
								<small  id="label-ee"  class="form-text text-muted" style="font-size: 1.1em"></small>
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
								<input onkeyup="verificacampo('label-cc', 'campo-cc')" id="campo-cc" class="form-control" type="text" name="cidade" placeholder="Sua cidade">
								<small  id="label-cc"  class="form-text text-muted" style="font-size: 1.1em"></small>
							</div>
						</div>
						<div class="form-row">
							<div class="form-group col-md-9">
								<label>Descrição:</label>
								<textarea onkeyup="verificacampo('label-d', 'campo-d')" id="campo-d" class="form-control" type="textarea" name="assunto" placeholder="Fale o motivo do contato"></textarea>
								<small  id="label-d"  class="form-text text-muted" style="font-size: 1.1em"></small>
							</div>	
						</div>
						<div class="d-flex justify-content-center">
							<button class="btn btn-danger " type="submit">Enviar</button>
						</div>
					</form>
				</article> <!-- Fim Form pra clientes -->
			</section>  <!-- Fim Forms -->
	
			<!-- Rodape -->
			<?php 
				require_once 'rodape.php'
			?>
			<!-- Fim rodape -->
			
			<!-- Optional JavaScript -->
    		<!-- jQuery first, then Popper.js, then Bootstrap JS -->
   			<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
   			<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
   			<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
		</body>

	</html>