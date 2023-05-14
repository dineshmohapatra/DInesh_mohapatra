<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <table align="center">
            <caption>Update Contact Information</caption>
            <tr><td>Roll:</td>
            <td><?php 
                    if(isset($_GET['roll']))
                        echo $_GET['roll'];
                ?></td></tr>
            <tr><td>Mobile:</td>
                <td><input type="text" name="mobile"></td></tr>
            <tr><td>Address:</td>
                <td><textarea rows="5" cols="20" name="address"></textarea></td></tr>
            <tr><td colspan="2"><a href="display.php">Back</a>
            <input type="submit" name="update" value="update">
    </td></tr>
    </form>
</body>
</html>
<?php
    if(isset($_GET['roll']))
        $roll=$_GET['roll'];
    if(isset($_POST['update'])){
        $con = mysqli_connect("localhost","root","","mydb") or die(mysqli_error($con));
        $mobile=$_POST['mobile'];
        $address=$_POST['address'];
        $qry="update student set mobile=$mobile,address='$address' where roll=$roll";
        mysqli_query($con,$qry);
        if(mysqli_affected_rows($con)>0){
            echo "student details updated";
        }
        else{
            echo "Error".mysqli_error($con);
        }
        mysqli_close($con);
    }
?>