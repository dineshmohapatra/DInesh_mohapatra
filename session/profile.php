<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>profile</title>
</head>
<body>
    <nav>
        <div class="nav">
            <button><a href="logout.php">Logout</a></button>
        </div>
    </nav>
</body>
</html>

<?php

    require "dbconfig.php";
    session_start();
    $email= $_SESSION['email'];
    $qry = "SELECT * FROM register WHERE email='$email'";
    $res = mysqli_query($con,$qry);
    while($data = mysqli_fetch_assoc($res)){
            ?>
            <table border="1px solid black">
                <tr>
                    <th>Name</th>
                    <th>Mobile</th>
                    <th>Email</th>
                </tr>
                <tr>
                    <td><?php echo $data['name']; ?></td>
                    <td><?php echo $data['mobile'] ?></td>
                    <td><?php echo $data['email'] ?></td>
                </tr>

            </table>
            <?php
        }
?>