<?php

	include('header.php');
	echo $_GET['id'];
	header('location: userlist.php');
	$servername = "localhost";
	$username = "username";
	$password = "password";
	$dbname = "webtech";

	$conn = new mysqli($servername, $username, $password, $dbname);
	if ($conn->connect_error) {
	  die("Connection failed: " . $conn->connect_error);
	}

	$sql = "DELETE FROM MyGuests WHERE id={'id'}";

	if ($conn->query($sql) === TRUE) {
	  echo " deleted successfully";
	} else {
	  echo "Error " . $conn->error;
	}

	$conn->close();
?>
