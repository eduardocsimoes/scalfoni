<?php 
	class homeController extends controller{

		public function index(){
			$dados = array();

			$produtos = new Products();

			$dados['produtos'] = $produtos->getBestSellers();

			$this->loadTemplate('home', $dados);
		}

		public function logout(){
			unset($_SESSION['name']);

			header("Location: ".BASE_URL);
		}

		public function clearcart(){
			unset($_SESSION['cart']);

			header("Location: ".BASE_URL);
		}
	}
 ?>