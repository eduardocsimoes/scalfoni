<?php 
	class quadrosController extends controller{

		public function index(){
			$dados = array();

			$produtos = new Products();

			$dados['produtos'] = $produtos->getPictures();

			$this->loadTemplate('home', $dados);
		}
	}
 ?>