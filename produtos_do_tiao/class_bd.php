<?php 
	
	class bd {
		
		private $conexao;
		private $produto;
		private $loja;
		private $nova_loja;
		private $cliente;
		

		public function __construct($conexao){
			$this->conexao = $conexao->conectar();
		}

		public function __set($atributo, $valor) {
			$this->$atributo = $valor;
		}

		public function recuperarP() {
			$query = "select * from produtos where tipo ='pinga' ";
			$stmt = $this->conexao->prepare($query);
			$stmt->execute();
			return $stmt->fetchAll(PDO:: FETCH_OBJ);
		}

		public function recuperarTodos() {
			$query = "select * from produtos";
			$stmt = $this->conexao->prepare($query);
			$stmt->execute();
			return $stmt->fetchAll(PDO:: FETCH_OBJ);
		}

		public function recuperarL() {
			$query = "select * from produtos where tipo ='licor' ";
			$stmt = $this->conexao->prepare($query);
			$stmt->execute();
			return $stmt->fetchAll(PDO:: FETCH_OBJ);
		}

		public function recuperarR() {
			$query = "select * from produtos where tipo ='rapadura' ";
			$stmt = $this->conexao->prepare($query);
			$stmt->execute();
			return $stmt->fetchAll(PDO:: FETCH_OBJ);
		}

		public function recuperarM() {
			$query = "select * from produtos where tipo ='outros' ";
			$stmt = $this->conexao->prepare($query);
			$stmt->execute();
			return $stmt->fetchAll(PDO:: FETCH_OBJ);
		}

		public function recuperarLojas($cidade) {
			$query = "select * from tb_parceiros where cidade ='" . $cidade . " ' ORDER BY nome ASC ";
			$stmt = $this->conexao->prepare($query);
			/*$stmt->bindValue(':cidade', $cidade);*/
			$stmt->execute();
			return $stmt->fetchAll(PDO:: FETCH_OBJ);
			
		}


		public function recuperarLojasBuscadas($nome_loja, $cidade) {
			$query = "select * from tb_parceiros where nome =  :nome_loja and cidade = :cidade  ";
			$stmt = $this->conexao->prepare($query);
			$stmt->bindValue(':nome_loja', $nome_loja);
			$stmt->bindValue(':cidade', $cidade);
			$stmt->execute();
			return $stmt->fetchAll(PDO:: FETCH_OBJ);
			
		}

		public function cadastraLoja() {
			$query = 'insert into tb_novos_parceiros (nome, nome_loja, uf, cidade, endereço) values (:nome, :nome_loja, :uf, :cidade, :endereco);';
			$stmt = $this->conexao->prepare($query);
			$stmt->bindValue(':nome', $this->nova_loja->__get('nome'));
			$stmt->bindValue(':nome_loja', $this->nova_loja->__get('nome_loja'));
			$stmt->bindValue(':uf', $this->nova_loja->__get('uf'));
			$stmt->bindValue(':cidade', $this->nova_loja->__get('cidade'));
			$stmt->bindValue(':endereco', $this->nova_loja->__get('endereco'));

			$stmt->execute();

		}

		public function Verificaloja() {
			$query = 'select * from tb_parceiros where nome = :nome';
			$stmt = $this->conexao->prepare($query);
			$stmt->bindValue(':nome', $this->nova_loja->__get('nome_loja'));

			$stmt->execute();

			return ($stmt->rowCount());
		}

		public function VerificaNovaLoja() {
			$query = 'select * from tb_novos_parceiros where nome_loja = :nome_loja and nome = :nome';
			$stmt = $this->conexao->prepare($query);
			$stmt->bindValue(':nome_loja', $this->nova_loja->__get('nome_loja'));
			$stmt->bindValue(':nome', $this->nova_loja->__get('nome'));

			$stmt->execute();

			return ($stmt->rowCount());
		}


		public function cadastraCliente() {
			$query = 'insert into tb_clientes (email,  uf, cidade, assunto) values (:email, :uf, :cidade, :assunto);';
			$stmt = $this->conexao->prepare($query);
			$stmt->bindValue(':email', $this->cliente->__get('email'));
			$stmt->bindValue(':uf', $this->cliente->__get('uf'));
			$stmt->bindValue(':cidade', $this->cliente->__get('cidade'));
			$stmt->bindValue(':assunto', $this->cliente->__get('assunto'));
			

			$stmt->execute();

		}

		public function VerificaCliente() {
			$query = 'select * from tb_clientes where email = :email ';
			$stmt = $this->conexao->prepare($query);
			$stmt->bindValue(':email', $this->cliente->__get('email'));
	

			$stmt->execute();

			return ($stmt->rowCount());
		}


		public function addLoja() {
			$query = 'insert into tb_parceiros (nome, uf, cidade, endereço, img) values (:nome, :uf, :cidade, :endereco, :img);';
			$stmt = $this->conexao->prepare($query);
			$stmt->bindValue(':nome', $this->loja->__get('nome'));
			$stmt->bindValue(':uf', $this->loja->__get('uf'));
			$stmt->bindValue(':cidade', $this->loja->__get('cidade'));
			$stmt->bindValue(':endereco', $this->loja->__get('endereco'));
			$stmt->bindValue(':img', $this->loja->__get('img_produto'));

			$stmt->execute();

		}

		
	}
	
?>