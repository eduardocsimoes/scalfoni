<?php 
	class Users extends model{

		public function login($email, $senha){

			$sql = "SELECT * FROM users WHERE email = :email AND password = :senha";
			$sql = $this->db->prepare($sql);
			$sql->bindValue(":email", $email);
			$sql->bindValue(":senha", md5($senha));
			$sql->execute();

			if($sql->rowCount() > 0){
				$dados = $sql->fetch();

				$_SESSION['name'] = $dados['name'];
				$_SESSION['email'] = $dados['email'];
				return $dados['name'];
			}else{
				return '';
			}
		}
	}
 ?>