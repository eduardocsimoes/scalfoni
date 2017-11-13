<?php 
	class Images extends model{

		public function getImage($id_product, $folder){

			$dados = '';

			$sql = "SELECT url FROM products_images WHERE id_product = :id_product AND main = 1";

			$sql = $this->db->prepare($sql);
			$sql->bindValue(":id_product",$id_product);
			$sql->execute();

			if($sql->rowCount() > 0){
				$dados = $sql->fetch();
				$dados = BASE_URL."assets/images/products/".$folder."/".$dados['url'];
			}

			return $dados;
		}

		public function getAllImages($id_product, $folder){

			$dados = array();

			$sql = "SELECT url FROM products_images WHERE id_product = :id_product AND main = 0 ORDER BY RAND() LIMIT 3";

			$sql = $this->db->prepare($sql);
			$sql->bindValue(":id_product",$id_product);
			$sql->execute();

			if($sql->rowCount() > 0){
				$images = $sql->fetchAll();
				foreach($images as $image){
					$dados[] = BASE_URL."assets/images/products/".$folder."/".$image['url'];
				}
			}

			return $dados;
		}		
	}
 ?>