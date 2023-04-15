
<?php
require "dbconfig.php";
include_once "navbar.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    *{
        padding: 0px;
        margin: 0px;
        font-family: Arial, Helvetica, sans-serif;
        /* box-sizing: border-box; */
    }
    form{
        background-color: pink;
        margin: 100px auto;
        width: 250px;
        padding: 10px;
        border-radius: 4px;
        box-shadow: 1px 1px 3px 3px black;
    }
    #san{
        padding: 3px;
    }
    label{
        font-size: 13px;
    }
    a{
        text-decoration: none;
    }
</style>
<body>
    <form action="index.php" method="post">
        <label>EMP ID</label>
        <input type="text" name="empid"><br><br>
        <label>NAME</label>
        <input type="text" name="name"><br><br>
        <label>MOBILE</label>
        <input type="text" name="mobile"><br><br>
        <label>EMAIL</label>
        <input type="email" name="email"><br><br>
        <label>ADDRESS</label>
        <textarea rows="5" cols="22" name="address"></textarea><br><br>
        <label>DEPARTMENT</label>
        <select name="department">
            <option>--select--</option>
            <option value="SDE">SDE</option>
            <option value="TL">TL</option>
            <option value="MNG">MAnager</option>
            <option value="HR">HR</option>
            <option value="TE">TestEngineer</option>
        </select><br><br>
        <label>SALARY</label>
        <input type="text" name="salary"><br><br>
        <input type="submit" id="san" name="add" value="ADD">
</form>
<?php
if(isset($_POST['add'])){
    $empid = $_POST['empid'];
    $name = $_POST['name'];
    $mobile = $_POST['mobile'];
    $email = $_POST['email'];
    $address = $_POST['address'];
    $department = $_POST['department'];
    $salary = $_POST['salary'];

    $con = mysqli_connect("localhost","root","","mydb") or die(mysqli_error($con));
    $qry = "INSERT INTO employee VALUES(0,'$name',$mobile,'$email','$address','$department',$salary)";

    if(mysqli_query($con,$qry)){
        header("location:display.php");
        echo "<h2>One record inserted</h2>";
    }
    else{
        echo "<p>Error: ".mysqli_error($con)."</p>";
    }
}
?>
</body>
</html>