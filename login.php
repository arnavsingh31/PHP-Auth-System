<?php 
	header('Content-Type: application/json');
	header("Access-Control-Allow-Origin: *");

	

		include_once('dbconfig.php');

		$email = $_POST['email'];
		$password = $_POST['password'];

		$check = User::check_credentials($email, $password);

		if($check['flag']){

			session_start();
			$_SESSION['user_id'] = $check['userID'];
			$_SESSION['user_name'] = $check['userName'];

			$output = array('status'=>'authorised', 'message'=>'Login Successfull.');
		}else{
			$output =array('status'=>'unauthorised', 'message'=>$check['err_msg'], 'stage'=>$check['stage']);
		}
		echo json_encode($output);
	
?>

