<?php
$dob = "";
$dob_err = "";

if (isset($_POST["submit"]))
 {
    if(empty($_POST['dob'])) {
        $dob_err = "Date of birth is required";
    } else if (preg_match("/^\d{4}-\d{2}-\d{2}$/", $_POST['dob']) != 1) {
        $dob_err = "Date of birth is not valid";
    } else {
        $dob = validate_input($_POST['dob']);
    }
}

function validate_input($str) {
    return htmlspecialchars(trim($str));
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>PHP validation</title>

    <style>
        .err {
            color: red;
        }
    </style>
</head>

<body>

    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
        
        <fieldset>
           Date Of Birth: <input type="date" name="dob" id="dob" value="<?php echo $dob; ?>">
            <span class="err"><?php echo $dob_err ?></span>
        </fieldset>
    </form>
</body>

</html>
