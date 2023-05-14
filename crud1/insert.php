<?php
    if(isset($_POST['submit'])){
        $roll=$_POST['roll'];
        $name=$_POST['name'];
        $mobile=$_POST['mobile'];
        $address=$_POST['address'];
        $branch=$_POST['branch'];

        $con = mysqli_connect("localhost","root","","mydb") or die(mysqli_error($con));
        $qry = "insert into student1 values(0,$roll,'$name','$mobile','$address','$branch')";

        if(mysqli_query($con,$qry)){
            echo "One Student inserted";
        }else{
            echo "Error while inserting:".mysqli_error($con);
        }
        mysqli_close($con);
    }
?>
<br>
<a href='registration.php'>Back</a>
<a href='display.php'>Display</a>