<?php
    $con = mysqli_connect("localhost","root","","mydb") or die(mysqli_error($con));
    $roll=$_GET['roll'];
    $qry="delete from student1 where roll=$roll";
    if(mysqli_query($con,$qry)){
        header("location:display.php");
    }
    else{
        echo "Error";
    }
?>