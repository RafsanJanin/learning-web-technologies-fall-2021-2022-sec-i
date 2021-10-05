<?php
 $req = "";
 $email = "";
 $degree = array();
if ($_SERVER["REQUEST_METHOD"] == "POST") 
{
   if (empty($_POST["email"])) 
  {
    $req = "Email Cannot be empty";
  } 
  else 
  {
    $email = check($_POST["email"]);
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) 
    {
      $req = "Must be a valid email address (i.e anything@example.com)";
      $email="";
    }
  }
}

function check($data) 
{
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>
<!DOCTYPE HTML>  
<html>
<head>
</head>
<body>  
<style>
.error {color: #FF0000;}
</style>

<h2>Email </h2>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  

  E-mail: <input type="text" name="email" value="<?php echo $email;?>">
  <span class="error">* <?php echo $req;?></span>
<br><br>
  <input type="submit" name="submit" value="Submit">  

</form>

<?php
echo "<h2>Your Email is:</h2>";

echo $email;
echo "<br>";

?>

</body>
</html>