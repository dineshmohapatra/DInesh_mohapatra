<?php
require "dbconfig.php";
include "navbar.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>WELCOME TO THE REGISTRATION</h1>
</body>
</html>

<?php
if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $mobile = $_POST['mobile'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $qry= "INSERT INTO register VALUES(0,'$name','$mobile','$email','$password')";
    if(mysqli_query($con,$qry)){
        ?>
        <script>
            alert("you are successfully registered");
            window.location="home.php";
        </script>
        <?php
    }
    else{
        echo "<p?>Error !!!</p>",mysqli_error($con);
    }
}
?>