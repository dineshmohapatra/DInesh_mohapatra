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
        <form class="form1" action="" method="post">
            <h1>User registration</h1>
            <label>Name</label>
            <input type="text" class="name" name="name"><br>
            <label> Father's name</label>
            <input type="text" class="fname" name="fname"><br>
            <label>DOB</label>
            <input type="date" class="dob" name="dob"><br><br>
            <input type="submit" class="submit" name="add" value="Go to second page ->>"><br>
        </form>
    </div>
</body>
</html>

<?php
    if(isset($_POST['add'])){
        $name = $_POST['name'];
        $fname = $_POST['fname'];
        $dob = $_POST['dob'];

        setcookie("name",$name);
        setcookie("fname",$dob);
        setcookie("dob",$dob);
        header("location:form2.php");
        }
?>