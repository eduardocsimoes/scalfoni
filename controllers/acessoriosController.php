<?php 
	class acessoriosController extends controller{

		public function index(){
			$dados = array();

			$produtos = new Products();

			$dados['produtos'] = $produtos->getAcessories();

			$this->loadTemplate('home', $dados);
		}
	}
 ?>