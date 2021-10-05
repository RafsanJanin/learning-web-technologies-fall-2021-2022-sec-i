<?php
$req = "";
$name = $count = "";
$degree = array();
if ($_SERVER["REQUEST_METHOD"] == "POST") 
{
  if (empty($_POST["name"])) 
  {
    $req = "Name Cannot be empty";
  } 
  else 
  {
    $name = check($_POST["name"]);
    if (!preg_match("/^[a-zA-Z-' .]*$/",$name) || str_word_count($name)<2 )
    {
      $req = "Must start with a letter and Contains at least two words";
      $name="";
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
<h2> NAME </h2>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  

  Name: <input type="text" name="name" value="<?php echo $name;?>">
  <span class="error">* <?php echo $req;?></span>
  <br><br>
<input type="submit" name="submit" value="Submit">  

</form>

<?php
echo "<h2>Your Name is:</h2>";
echo $name;
echo "<br>";
echo "<br>";

?>

</body>
</html>