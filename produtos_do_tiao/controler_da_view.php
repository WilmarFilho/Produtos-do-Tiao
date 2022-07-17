<?php 
	require_once '../../produtos_do_tiao/class_produto.php';
	require_once '../../produtos_do_tiao/class_conexao.php';
	require_once '../../produtos_do_tiao/class_bd.php';
	require_once '../../produtos_do_tiao/class_loja.php';
	require_once '../../produtos_do_tiao/class_nova_loja.php';
	require_once '../../produtos_do_tiao/class_cliente.php';



	if (isset($_GET['mostra'])) {
		
		$produto = new Produto();
		$conexao = new Conexao();

		$bd = new bd($conexao);
		$bd->__set('produto', $produto);
		$produtosPinga = $bd->recuperarP();
		$produtosLicor = $bd->recuperarL();
		$produtosRapadura = $bd->recuperarR();
		$produtosMelado = $bd->recuperarM();
		
	}

	if (isset($_GET['produto'])) {
		
		$produto = new Produto();
		$conexao = new Conexao();

		$bd = new bd($conexao);
		$bd->__set('produto', $produto);
		$produtos = $bd->recuperarTodos();
		
	}


	

	if (isset($_GET['cidade']) or isset($_GET['letra'])) {
		
		$loja = new Loja();
		$conexao = new Conexao();
		

		$bd = new bd($conexao);
	
		$bd->__set('loja', $loja);
		
		$lojas =  $bd->recuperarLojas($_GET['cidade']);


	}
		
		
	if(isset($_GET['nomeloja'])) {
		$loja = new Loja();
		$conexao = new Conexao();
		$produto = new Produto();
		

		$bd = new bd($conexao);
	
		$bd->__set('loja', $loja);
		

		
		$nome_loja = $_GET['nomeloja'];
		$cidade = $_GET['cidade'];
		$lojas =  $bd->recuperarLojasBuscadas($nome_loja, $cidade);
		
	}

	if (isset($_POST['nomeloja'])) {
		$url = 'location: distribuidores.php?cidade=' . $_GET['cidade'] . '&nomeloja=' . $_POST['nomeloja'] ;
		header($url);
	}

	if (isset($_GET['inserir'])) {

		if (isset($_POST['endereco'])) {

			if (strlen($_POST['nome']) > 6 and strlen($_POST['nome_loja']) > 6 and strlen($_POST['cidade']) > 6 and strlen($_POST['endereco']) > 6 ) {
				
				$nova_loja = new novaLoja();

				$nova_loja->__set('nome', strtolower($_POST['nome']));
				$nova_loja->__set('nome_loja', strtolower($_POST['nome_loja']));
				$nova_loja->__set('uf', $_POST['uf']);
				$nova_loja->__set('cidade', strtolower($_POST['cidade']));
				$nova_loja->__set('endereco', strtolower($_POST['endereco']));

				$conexao = new Conexao();

				$bd = new bd($conexao);

				$bd->__set('nova_loja', $nova_loja);


				if ($bd->Verificaloja() == 1) {

					header("location: contato.php?inserir=falha1");
					
				}

				else {
					
					if ($bd->verificaNovaLoja() == 1) {
						header("location: contato.php?inserir=falha2");
						
					}

					else {
						$bd->cadastraLoja();
						header("location: contato.php?inserir=sucesso");
						
					}
				}

			}

			else {
				header("location: contato.php?inserir=invalido");
			}
			
			

		}

		elseif (isset($_POST['email'])) {

			if (strlen($_POST['email']) > 10 and strlen($_POST['cidade']) > 5 and strlen($_POST['assunto']) > 10 ) {
			
				$cliente = new cliente();

				$cliente->__set('email', strtolower($_POST['email']));
				$cliente->__set('uf', $_POST['uf']);
				$cliente->__set('cidade', strtolower($_POST['cidade']));
				$cliente->__set('assunto', strtolower($_POST['assunto']));
				

				$conexao = new Conexao();

				$bd = new bd($conexao);

				$bd->__set('cliente', $cliente);

				if($bd->VerificaCliente() == 1) {
					header("location: contato.php?inserir=falha3");
				}

				else {
					$bd->cadastraCliente();
					header("location: contato.php?inserir=sucesso1");
				}

				

			}

			else {
				header("location: contato.php?inserir=invalido1");
			}

			
		}
		
	}

	if (isset($_GET['adm'])) {


		if (isset($_POST['endereco'])) {
			
			$loja = new loja();

		
			$loja->__set('nome', $_POST['nome']);
			$loja->__set('uf', $_POST['uf']);
			$loja->__set('cidade', $_POST['cidade']);
			$loja->__set('endereco', $_POST['endereco']);
			$loja->__set('img_produto', $_POST['img_produto']);

			$conexao = new Conexao();

			$bd = new bd($conexao);

			$bd->__set('loja', $loja);

			$bd->addLoja();

		}


	}
		
		









?>