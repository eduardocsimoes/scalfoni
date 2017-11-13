<?php 
	class notfoundController extends controller{

		public function index(){
			$dados = array();

			$this->loadView('404', $dados);
		}
	}	
 ?>

<?php
class notfoundController extends controller {

	public function index() {
		$this->loadView('404', array());
	}

}
