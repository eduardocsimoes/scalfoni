<?php 
	class ajaxController extends controller{

		public function login(){

			$usuarios = new Users();

			$email = addslashes($_POST['email']);
			$senha = $_POST['senha'];

			echo $usuarios->login($email, $senha);
		}

		public function addCart(){

			/*$array = array(
				array(
					"count" = 0,
					"amount" = 0
				),
				"amount" = 0
			);

			$idProduct = addslashes(intval($_POST['idProduct']));
			$price = addslashes(floatval($_POST['price']));

			$_SESSION['cart'] = $id_product;

			$_SESSION['cart'][$id_product] = $array;

			$_SESSION['cart'][$id_product]['price'] = floatval($price);
			$_SESSION['cart'][$id_product]['amount'] = floatval($_SESSION['cart'][$id_product]['count']) * floatval($_SESSION['cart'][$id_product]['price']);

			if(isset($_SESSION['cart'][$id_product]['count']){
				$_SESSION['cart'][$id_product]['count'] += 1;
			}else{
				$_SESSION['cart'][$id_product]['count'] = 1;
			}

			if(isset($_SESSION['cart'][$id_product]['count']){
				$_SESSION['cart']['amount'] += floatval($price);
			}else{
				$_SESSION['cart']['amount'] = floatval($price);
			}

			echo $_SESSION['cart'][$id_product]['count'];*/

			$idProduct = intval(addslashes($_POST['idProduct']));
			$price = floatval(addslashes($_POST['price']));

			if(isset($_SESSION['cart'][$idProduct]) && !empty($_SESSION['cart'][$idProduct])){
				$_SESSION['cart'][$idProduct]['count'] += 1;
				$_SESSION['cart'][$idProduct]['amount'] += $price;
			}else{
				$_SESSION['cart'][$idProduct]['price'] = $price;
				$_SESSION['cart'][$idProduct]['count'] = 1;
				$_SESSION['cart'][$idProduct]['amount'] = $price;
			}

			if(isset($_SESSION['cart']['amount']) && !empty($_SESSION['cart']['amount'])){
				$_SESSION['cart']['amount'] += $price;
			}else{
				$_SESSION['cart']['amount'] = $price;
			}
//unset($_SESSION['cart']);
			echo json_encode(array('count' => $_SESSION['cart'][$idProduct]['count'], 'amount' => $_SESSION['cart']['amount']));
		}
	}
 ?>