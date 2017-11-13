<?php 
	class lancamentosController extends controller{

		public function index(){
			$dados = array();

			$produtos = new Products();

			$dados['produtos'] = $produtos->getNewProduct();

			$this->loadTemplate('home', $dados);
		}
	}
 ?>