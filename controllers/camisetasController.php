<?php 
	class camisetasController extends controller{

		public function index(){
			$dados = array();

			$produtos = new Products();

			$dados['produtos'] = $produtos->getTShirts();

			$this->loadTemplate('home', $dados);
		}
	}
 ?>