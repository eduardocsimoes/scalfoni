<?php 
	class Brands extends model{

		public function getBrand($id_brand){

			$dados = '';

			$sql = "SELECT name FROM brands WHERE id = :id_brand";

			$sql = $this->db->prepare($sql);
			$sql->bindValue(":id_brand",$id_brand);
			$sql->execute();

			if($sql->rowCount() > 0){
				$dados = $sql->fetch();
				$dados = $dados['name'];
			}

			return $dados;
		}
	}
 ?>