<?php 
	class quemsomosController extends controller{

		public function index(){
			$dados = array();

			$this->loadTemplate('quemsomos', $dados);
		}
	}
 ?>