<?php 	
		
		try{
			$pdo = null;
			$dsn = "mysql:host=localhost; dbname=authsys";
			$pdo = new PDO($dsn, 'root', '');
			$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

		}catch(PDOException $e){
			echo 'connection error:'.$e->getMessage();	
			}
		

		function autoloader($class){
			$classExt = '.php';
			$path = 'models/';
			$fullPath = $path.$class.$classExt;

			if (!file_exists($fullPath)){
				return false;
			}

			include($fullPath);
		}	

		
		spl_autoload_register('autoloader');

?>