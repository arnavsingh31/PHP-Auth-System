<?php 

	header('Content-Type: application/json');
	header("Access-Control-Allow-Origin: *");
	header('Access-Control-Allow-Methods: POST');
	header('Access-Control-Allow-Headers: Content-type, Access-Control-Allow-Methods, Access-Control-Allow-Headers, Authorization, X-Requested-With');
	
	
	

		include_once('dbconfig.php');
			
		$username = $_POST['name'];		
		$email  = $_POST['email'];
		$password = $_POST['password'];
		$conf_password = $_POST['conf_password'];

		$validate =  User::validate_user_data($username, $email, $password, $conf_password);
		
		if ($validate['flag']){
			if(!User::userExists($email)){
				$user_id = User::insert_user($username, $email, $password, $conf_password);
				
				if($user_id){
					$output = array('status'=>'success', 'message'=>'Registered Successfully.', 'user_id'=>$user_id);
				} else{
					$output = array('status'=>'failure', 'message'=>'There is an error during insertion, please try again later', 'stage'=>5);
				}
			}else {
				$output = array('status'=>'failure', 'message'=>'Email id is already registered', 'stage'=>6);
			}
		}else {
			$output =array('status'=>'failure', 'message'=>$validate['err_msg'], 'stage'=>$validate['stage']);
		}
		echo json_encode($output);
	

 ?>