<?php
require "dbconfig.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <div class="container" align="center">
        <form action="" method="post">
            <h1>Login Here</h1>
            <label>Email ID</label>
            <input type="text" class="email" name="email"><br>
            <label>passoword</label>
            <input type="password" class="password" name="password"><br>
            <input type="submit" class="login" name="login" value="Login"><br>
        </form>
    </div>
</body>
</html>

<?php

if(isset($_POST['login'])){
    $email = $_POST['email'];
    $password = $_POST['password'];

    $qry = "SELECT * FROM register WHERE email = '$email' AND password = '$password'";

    $res = mysqli_query($con,$qry);
    if(mysqli_num_rows($res)>0){
        session_start();
        $_SESSION['email']=$email;
        header("location:profile.php");
    }
    else{
        echo "Invalid Email or password";
    }
}
?>