<?php 
	class Categories extends model{

		public function getCategory($id_category){

			$array = array();

			$sql = "SELECT name, folder FROM categories WHERE id = :id_category";

			$sql = $this->db->prepare($sql);
			$sql->bindValue(":id_category",$id_category);
			$sql->execute();

			if($sql->rowCount() > 0){
				$array = $sql->fetch();
			}

			return $array;
		}
	}
 ?>