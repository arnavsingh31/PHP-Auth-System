<?php 
	
	include_once('dbconfig.php');

	class User {

		public function validate_user_data($username, $email, $password, $conf_password){
			//1. validate username
			
			//clean data
			$username = htmlspecialchars(strip_tags(trim($username)));			
			$email = htmlspecialchars(strip_tags(trim($email)));
			$password = htmlspecialchars(strip_tags(trim($password)));
			$conf_password = htmlspecialchars(strip_tags(trim($conf_password)));

			if(!preg_match("/^[A-Za-z]{1}[A-Za-z0-9]{6,20}$/", $username)){
				return array('err_msg'=>'Username must be atleast 6 characters and alphanumeric.', 'flag'=>false, 'stage'=>1);
			}else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
				return array("err_msg"=>'Invalid Email Address.', 'flag'=>false, 'stage'=>2);
			}elseif (strlen($password)< 6) {
				return array('err_msg'=>'Password must be atleast 6 characters.', 'flag'=>false, 'stage'=>3);
			}elseif ($password !== $conf_password) {
				return array('err_msg'=>'Passwords do not match.', 'flag'=>false, 'stage'=>4);
			}

			return array('flag'=>true);	
								
		}
		
		public function userExists($email){
			
			global $pdo;
			
			if(strlen($email)){	
			$query = 'SELECT id FROM user WHERE email= :emailID';
			$stmt = $pdo->prepare($query);
			$stmt->bindParam(':emailID', $email);
			$stmt->execute();
			$stmt->bindColumn(1,$user_id);
			$user_id = $stmt->fetch(PDO::FETCH_BOUND);
						
			return $user_id;
			}else{
				return 0;
			}	
		}


		public function insert_user($username, $email, $password){

			global $pdo;

			$username = htmlspecialchars(strip_tags(trim($username)));
			$email = htmlspecialchars(strip_tags(trim($email)));
			$password = htmlspecialchars(strip_tags(trim($password)));
			
			$hashed_password = password_hash($password, PASSWORD_DEFAULT); 

			$query = 'INSERT INTO user (username, email, password) VALUES(:name, :emailID, :pwd)';
			$stmt = $pdo->prepare($query);
			$stmt->bindParam(':name', $username);
			$stmt->bindParam(':emailID', $email);
			$stmt->bindParam(':pwd', $hashed_password);
			$stmt->execute();
			$id = $pdo->lastInsertId();
			
			return $id;

		}


		public function check_credentials($email, $password){

			global $pdo;
			
			$email = htmlspecialchars(strip_tags($email));
			$password = htmlspecialchars(strip_tags($password));

			
			if(strlen($email) && strlen($password)){
				$query = "SELECT id, password, username FROM user WHERE email = :emailID";
				$stmt = $pdo->prepare($query);
				$stmt->bindParam(':emailID', $email);
				if($stmt->execute()){
					$stmt->bindColumn(1, $user_id);
					$stmt->bindColumn(2, $hashed_password);
					$stmt->bindColumn(3, $user_name);
					$row = $stmt->fetch(PDO::FETCH_BOUND);
					
				}else{
					return array('err_msg'=>'Invalid email or password.', 'flag'=>false, 'stage'=>1);
				}
			}

			if(password_verify($password, $hashed_password)){
				return array('flag'=>true, 'userID'=>$user_id, 'userName'=>$user_name);
			}else{
				return array('err_msg'=>'Invalid email or password.', 'flag'=>false, 'stage'=>2);
			}
		}
	}	
?>