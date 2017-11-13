<?php 
	class promocoesController extends controller{

		public function index(){
			$dados = array();
			
			$produtos = new Products();

			$dados['produtos'] = $produtos->getSale();

			$this->loadTemplate('home', $dados);
		}
	}
 ?>