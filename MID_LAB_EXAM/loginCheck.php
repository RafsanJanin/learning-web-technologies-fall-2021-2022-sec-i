<?php 
	session_start();

	if(isset($_POST['Login'])){

		$username 	= $_POST['username'];
		$password 	= $_POST['password'];

		if($username != ""){
			if($password != ""){
				
				$myfile = fopen('user.txt', 'r');
				
				while(!feof($myfile)){
					
					$data = fgets($myfile);
					$user = explode('|', $data);		
					
					if($username == trim($user[0]) && $password == trim($user[1])){
						setcookie('flag', 'true', time()+3600, '/');
						header('location: userhome.php');
					}
				}

				echo "invalid username/password";

			}else{
				echo "invalid password....";
			}
		}else{
			echo "invalid username....";
		}
	}
?>