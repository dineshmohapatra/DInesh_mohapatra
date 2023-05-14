<?php
include "dbconfig.php";
include "navbar.php";


$id = $_GET['empid'];
echo "Details of Employee ID $id";
$qry = "SELECT * FROM employee WHERE empid = $id";
$res = mysqli_query($con,$qry);
while($data = mysqli_fetch_assoc($res)){
    ?>
    <p>empid : <?php echo $data['empid']; ?> </p>
    <p>Name : <?php echo $data['name']; ?> </p>
    <p>mobile : <?php echo $data['mobile']; ?> </p>
    <p>Email : <?php echo $data['email']; ?> </p>
    <p>address : <?php echo $data['address']; ?> </p>
    <p>department : <?php echo $data['department']; ?> </p>
    <p>salary : <?php echo $data['salary']; ?> </p>
    <p>Name : <?php echo $data['mobile']; ?> </p>
    <?php 
}
?>
