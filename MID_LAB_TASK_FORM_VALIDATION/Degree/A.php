<?php
 $degreeErr =  "";
 $count = "";
 $degree = array();

if ($_SERVER["REQUEST_METHOD"] == "POST") 
{
  

  if (empty($_POST["degree"]) ) 
  {
    $degreeErr = "At least two of them must be selected";
  } 
  else 
  {
    foreach($_POST['degree'] as $selected_degree)
  {
    $count++;
  }
    if ($count<2)
    {
      $degreeErr = "At least two of them must be selected";
    }
    
  } 
}
function test_input($data) 
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
<h2>DEGREE </h2>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
 Degree:  <input type="checkbox" name="degree[]" <?php if (isset($degree) && $degree=="ssc") echo "checked";?> value="ssc">SSC
          <input type="checkbox" name="degree[]" <?php if (isset($degree) && $degree=="hsc") echo "checked";?> value="hsc">HSC
          <input type="checkbox" name="degree[]" <?php if (isset($degree) && $degree=="bsc") echo "checked";?> value="bsc">BSc
          <input type="checkbox" name="degree[]" <?php if (isset($degree) && $degree=="msc") echo "checked";?> value="msc">MSc
          <span class="error">* <?php echo $degreeErr;?></span>
          <br><br>
      <input type="submit" name="submit" value="Submit">  

</form>
</body>
</html>