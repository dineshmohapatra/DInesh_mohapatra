<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <form class = "form2" action="" method="">
            <h1>Fill the 2nd form</h1>
            <label>Mobile</label>
            <input type="mobile" class="mobile" name="mobile"><br>

            <label>Email</label>
            <input type="email" class="email" name="email"><br>

            
            <label>Email</label>
            <div>
                <textarea name="address" id="address" cols="30" rows="10"></textarea>
            </div><br>
            <input class="submit" type="submit" name="submit" value="Register"><br>
        </form>
    </div>
</body>
</html>

<?php
    if(isset($_POST['submit'])){
        $mobile = $_POST['mobile'];
        $_email = $_POST['email'];
        $_address = $_POST['address'];

        setcookie("mobile",$mobile);
        setcookie("email",$email);
        setcookie("address",$address);
        header("location: display.php");
    }
?>