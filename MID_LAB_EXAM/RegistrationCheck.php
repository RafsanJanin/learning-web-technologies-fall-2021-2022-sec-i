<?php 
	//session_start();

	if(isset($_POST['submit'])){

		$ID 	= $_POST['ID'];
		$name 		= $_POST['name'];
		$password 	= $_POST['password'];
		$compassword 	= $_POST['compassword'];

		if($ID != ""){
			if($password != ""){
				if($name !=""){

					$myfile = fopen('user.txt', 'a');
					$myuser = $ID."|".$password."|".$name."\r\n";
					fwrite($myfile, $myuser);
					fclose($myfile);
                    if($password=$compassword){
					header('location: login.html');}
					else{echo "invalid confirm password....";}
				}else{
					echo "invalid name....";
				}
			}else{
				echo "invalid password....";
			}
		}else{
			echo "invalid ID....";
		}
	}
?>