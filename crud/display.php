<?php
include "dbconfig.php";
include "navbar.php";
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
    table{
        width: 50%;
        margin: 20px auto;
        border: 1px solid blue;
        box-shadow: 1px 1px 5px 2px black;
        border-collapse: collapse;
        margin-top: 300px;
    }
    td,th{
        border: 1px solid black;
        padding: 3px;
        /* text-align: justify; */
    }
    a{
        text-decoration: none;
    }
</style>
<body>
    <?php
    $con = mysqli_connect("localhost","root","","mydb") or die(mysqli_error($con));
    $qry = "SELECT * FROM employee";
    $res = mysqli_query($con,$qry);
    if(mysqli_num_rows($res)>0){
    ?>
    <table>
        <tr>
            <th>Emp ID</th><th>Name</th><th>Department</th><th></th>
        </tr>
        <?php
        while($row=mysqli_fetch_assoc($res)){
            $id = $row['empid'];
            ?>
            <tr>
                <td><?php echo $id?></td>
                <td><?php echo $row['name']; ?></td>
                <td><?php echo $row['department']; ?></td>
                <td>
                    <a href="details.php?empid=<?php echo $id;?>">Details</a>
                    <a href="update.php?empid=<?php echo $id;?>">update</a>
                    <a href="delete.php?empid=<?php echo $id;?>" onclick= "return confirm('Are you sure ?')">Delete</a>
                </td>
            </tr>
            <?php       
        } 
        ?>
        </table>
        <?php
        } else{
            echo "<h2> NO record available</h2>";
        }   
    ?>
</body>
</html>