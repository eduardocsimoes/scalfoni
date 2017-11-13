<?php 
	class informacoesController extends controller{

		public function index(){
			$dados = array();

			$this->loadTemplate('informacoes', $dados);
		}
	}
 ?>