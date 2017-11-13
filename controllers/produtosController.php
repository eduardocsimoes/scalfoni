<?php 
	class produtosController extends controller{

		public function Produto($idProduto){
			$dados = array();

			$produtos = new Products();

			$dados['produto'] = $produtos->getProduct($idProduto);

			$this->loadTemplate('paginadoproduto', $dados);
		}
	}
 ?>