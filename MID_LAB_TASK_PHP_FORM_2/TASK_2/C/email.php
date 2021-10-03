<?php 

	if(isset($_REQUEST['submit']))
	{
		$email = $_REQUEST['myemail'];
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
		email: <input type="text" name="myemail" value="<?php if(isset($email)){ echo $email; }?>"/>
		<input type="submit" name="submit" value="Submit">
		</fieldset>
	</form>
</body>
</html>