<?php 
	class Produto {
		
		private $id;
		private $nome;
		private $tipo;
		private $descricao; 
		private $sabor;
		private $img_produto;

		public function __set($atributo, $valor) {
			$this->$atributo = $valor;
		}

		public function __get($atributo) {
			return $this->$atributo;
		}
	}
	
?>