<?php
$con = mysqli_connect("localhost","root","","mydb");

if($con){

}
else{
    echo "Error!!!",mysqli_error($con);
}

?>