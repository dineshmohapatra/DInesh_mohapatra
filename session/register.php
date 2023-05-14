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
    <title>User Registration</title>
    <style></style>
</head>
<body>
    <div class="conatiner">
        <form class="from1" action="home.php" method="post">
            <h1>User Registration</h1>
            <label>Name</label>
            <input type="text" class="name" name="name"><br>
            <label>mobile</label>
            <input type="text" class="mobile" name="mobile"><br>
            <label>Email ID</label>
            <input type="text" class="email" name="email"><br>
            <label>password</label>
            <input type="password" class="password" name="password"><br>
            <input type="submit" class="submit" name="submit" value="register"><br>
        </form>
    </div>
</body>
</html>