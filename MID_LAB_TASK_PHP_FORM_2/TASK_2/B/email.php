<?php 
    if(isset($_REQUEST['submit'])){
		$email = $_REQUEST['myemail'];
		if($email != ""){
			echo $email;
		}else{
			echo "Null value...";
		}
	}

?>


<html>
<head>
	<title>Email</title>
</head>
<body>
	<form method="post" >
		<fieldset>
			<legend>EMAIL</legend>
		email: <input type="text" name="myemail" value=""/>
		<input type="submit" name="submit" value="Submit">
		</fieldset>
	</form>
</body>
</html>