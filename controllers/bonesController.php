<?php 
	class bonesController extends controller{

		public function index(){
			$dados = array();

			$produtos = new Products();

			$dados['produtos'] = $produtos->getCaps();

			$this->loadTemplate('home', $dados);
		}
	}
 ?>