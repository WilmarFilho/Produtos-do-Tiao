<?php 
	class Loja {
		
		private $id;
		private $nome;
		private $uf;
		private $cidade;
		private $endereço; 
		private $img_produto;

		public function __set($atributo, $valor) {
			$this->$atributo = $valor;
		}

		public function __get($atributo) {
			return $this->$atributo;
		}
	}
	
?>