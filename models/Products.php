<?php 
	class Products extends model{

		public function getProduct($idProduto){
			$brands = new Brands();
			$categories = new Categories();
			$images = new Images();

			$array = array();

			$sql = "SELECT * FROM products WHERE id = :idProduto";

			$sql = $this->db->prepare($sql);
			$sql->bindVAlue(':idProduto', $idProduto);
			$sql->execute();

			if($sql->rowCount() > 0){
				$array = $sql->fetch();
				$array['brand'] = $brands->getBrand($array['id_brand']);
				$category = $categories->getCategory($array['id_category']);
				$array['category'] = $category['name'];
				$array['image']['principal'] = $images->getImage($array['id'], $category['folder']);
				$array['image']['diversas'] = $images->getAllImages($array['id'], $category['folder']);
			}

			return $array;
		}

		public function getBestSellers(){
			$brands = new Brands();
			$categories = new Categories();
			$images = new Images();

			$array = array();

			$sql = "SELECT * FROM products WHERE bestseller = :bestseller ORDER BY RAND()";

			$sql = $this->db->prepare($sql);
			$sql->bindValue(":bestseller", '1');
			$sql->execute();

			if($sql->rowCount() > 0){
				$array = $sql->fetchAll();

				foreach($array as $key => $value){
					 $array[$key]['brand'] = $brands->getBrand($value['id_brand']);
					 $category = $categories->getCategory($value['id_category']);
					 $array[$key]['category'] = $category['name'];
					 $array[$key]['image'] = $images->getImage($value['id'], $category['folder']);
					 //$array['filter'] = 'bestseller';
				}
			}

			return $array;
		}

		public function getSale(){
			$brands = new Brands();
			$categories = new Categories();
			$images = new Images();

			$array = array();

			$sql = "SELECT * FROM products WHERE sale = '1' ORDER BY RAND()";

			$sql = $this->db->prepare($sql);
			$sql->execute();

			if($sql->rowCount() > 0){
				$array = $sql->fetchAll();

				foreach($array as $key => $value){
					 $array[$key]['brand'] = $brands->getBrand($value['id_brand']);
					 $category = $categories->getCategory($value['id_category']);
					 $array[$key]['category'] = $category['name'];
					 $array[$key]['image'] = $images->getImage($value['id'], $category['folder']);
					 //$array['filter'] = 'sale';
				}
			}

			return $array;
		}

		public function getNewProduct(){
			$brands = new Brands();
			$categories = new Categories();
			$images = new Images();

			$array = array();

			$sql = "SELECT * FROM products WHERE new_product = '1' ORDER BY RAND()";

			$sql = $this->db->prepare($sql);
			$sql->execute();

			if($sql->rowCount() > 0){
				$array = $sql->fetchAll();

				foreach($array as $key => $value){
					 $array[$key]['brand'] = $brands->getBrand($value['id_brand']);
					 $category = $categories->getCategory($value['id_category']);
					 $array[$key]['category'] = $category['name'];
					 $array[$key]['image'] = $images->getImage($value['id'], $category['folder']);
					 //$array['filter'] = 'sale';
				}
			}

			return $array;
		}

		public function getTShirts(){
			$brands = new Brands();
			$categories = new Categories();
			$images = new Images();

			$array = array();

			$sql = "SELECT * FROM products WHERE id_category = '1' ORDER BY RAND()";

			$sql = $this->db->prepare($sql);
			$sql->execute();

			if($sql->rowCount() > 0){
				$array = $sql->fetchAll();

				foreach($array as $key => $value){
					 $array[$key]['brand'] = $brands->getBrand($value['id_brand']);
					 $category = $categories->getCategory($value['id_category']);
					 $array[$key]['category'] = $category['name'];
					 $array[$key]['image'] = $images->getImage($value['id'], $category['folder']);
					 //$array['filter'] = 'sale';
				}
			}

			return $array;
		}

		public function getCaps(){
			$brands = new Brands();
			$categories = new Categories();
			$images = new Images();

			$array = array();

			$sql = "SELECT * FROM products WHERE id_category = '2' ORDER BY RAND()";

			$sql = $this->db->prepare($sql);
			$sql->execute();

			if($sql->rowCount() > 0){
				$array = $sql->fetchAll();

				foreach($array as $key => $value){
					 $array[$key]['brand'] = $brands->getBrand($value['id_brand']);
					 $category = $categories->getCategory($value['id_category']);
					 $array[$key]['category'] = $category['name'];
					 $array[$key]['image'] = $images->getImage($value['id'], $category['folder']);
					 //$array['filter'] = 'sale';
				}
			}

			return $array;
		}

		public function getAcessories(){
			$brands = new Brands();
			$categories = new Categories();
			$images = new Images();

			$array = array();

			$sql = "SELECT * FROM products WHERE id_category = '5' ORDER BY RAND()";

			$sql = $this->db->prepare($sql);
			$sql->execute();

			if($sql->rowCount() > 0){
				$array = $sql->fetchAll();

				foreach($array as $key => $value){
					 $array[$key]['brand'] = $brands->getBrand($value['id_brand']);
					 $category = $categories->getCategory($value['id_category']);
					 $array[$key]['category'] = $category['name'];
					 $array[$key]['image'] = $images->getImage($value['id'], $category['folder']);
					 //$array['filter'] = 'sale';
				}
			}

			return $array;
		}

		public function getPictures(){
			$brands = new Brands();
			$categories = new Categories();
			$images = new Images();

			$array = array();

			$sql = "SELECT * FROM products WHERE id_category = '4' ORDER BY RAND()";

			$sql = $this->db->prepare($sql);
			$sql->execute();

			if($sql->rowCount() > 0){
				$array = $sql->fetchAll();

				foreach($array as $key => $value){
					 $array[$key]['brand'] = $brands->getBrand($value['id_brand']);
					 $category = $categories->getCategory($value['id_category']);
					 $array[$key]['category'] = $category['name'];
					 $array[$key]['image'] = $images->getImage($value['id'], $category['folder']);
					 //$array['filter'] = 'sale';
				}
			}

			return $array;
		}
	}
 ?>