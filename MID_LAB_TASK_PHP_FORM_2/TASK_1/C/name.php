<?php 

	if(isset($_REQUEST['submit']))
	    {
		$name = $_REQUEST['myname'];
		}

?>


<html>
<head>
	<title>Name</title>
</head>
<body>
	<form method="post" >
		<fieldset>
			<legend>NAME</legend>
		Username: <input type="text" name="myname" value="<?php if(isset($name)){ echo $name; }?>"/>
		<input type="submit" name="submit" value="Submit">
		</fieldset>
	</form>
</body>
</html>