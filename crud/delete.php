<?php
include "dbconfig.php";

$id = $_GET['empid'];
$qry = "DELETE FROM employee WHERE empid = $id";
if(mysqli_query($con,$qry)){
    ?>
    <script>
        alert("One record deleted");
        window.location = "display.php";
    </script>
    <?php
}
else{
    echo mysqli_error($con);
}
?>