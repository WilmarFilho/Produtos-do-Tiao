<?php 
	class novaLoja {
		
		private $id;
		private $nome;
		private $nome_loja;
		private $uf;
		private $cidade;
		private $endereco; 

		public function __set($atributo, $valor) {
			$this->$atributo = $valor;
		}

		public function __get($atributo) {
			return $this->$atributo;
		}
	}
	
?>