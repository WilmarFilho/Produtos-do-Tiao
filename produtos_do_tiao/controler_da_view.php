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


	

	if (isset($_GET['cidade'])) {
		
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
		$lojas =  $bd->recuperarLojasBuscadas($nome_loja);
		
	}

	if (isset($_GET['inserir'])) {

		if (isset($_POST['endereco'])) {
			$nova_loja = new novaLoja();

			$nova_loja->__set('nome', $_POST['nome']);
			$nova_loja->__set('nome_loja', $_POST['nome_loja']);
			$nova_loja->__set('uf', $_POST['uf']);
			$nova_loja->__set('cidade', $_POST['cidade']);
			$nova_loja->__set('endereco', $_POST['endereco']);

			$conexao = new Conexao();

			$bd = new bd($conexao);

			$bd->__set('nova_loja', $nova_loja);

			$bd->cadastraLoja();

		}

		elseif (isset($_POST['email'])) {
			
			$cliente = new cliente();

			$cliente->__set('email', $_POST['email']);
			$cliente->__set('uf', $_POST['uf']);
			$cliente->__set('cidade', $_POST['cidade']);
			

			$conexao = new Conexao();

			$bd = new bd($conexao);

			$bd->__set('cliente', $cliente);

			$bd->cadastraCliente();

			
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