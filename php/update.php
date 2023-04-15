<?php
include "dbconfig.php";
include "navbar.php";

$id = 0;
if(isset($_GET['empid'])){
    $id = $_GET['empid'];
} else if(isset($_POST['empid'])){
    $id = $_POST['empid'];
}
//$id = $_GET['id'];
$qry = "SELECT * FROM employee WHERE empid = $id";
$res = mysqli_query($con, $qry);
$data = mysqli_fetch_assoc($res);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>hello</title>
    <style>
        input, textarea, select{
            display: block;
            margin-bottom: 5px;
        }
    </style>
</head>
<body>
    <h1>Update Details of Emp ID <?php echo $id; ?></h1>
    <form action="update.php" method="post">
        <input type="hidden" name="empid" value="<?php echo $data['empid']; ?>">
        <label>Name</label>
        <input type="text" name="name" value="<?php echo $data['name']; ?>">
        <label>Mobile</label>
        <input type="text" name="mobile" value="<?php echo $data['mobile']; ?>">
        <label>Email</label>
        <input type="email" name="email" value="<?php echo $data['email']; ?>">
        <label>Address</label>
        <textarea rows="5" cols="22" name="address">
            <?php echo $data['address']; ?>
        </textarea>
        <label>Department</label>
        <select name="department">
            <option>--Select--</option>
            <option 
                value="SDE"
                <?php if($data['department']=="SDE") echo "selected"; ?>
            >SDE</option>
            <option 
                value="TL"
                <?php if($data['department']=="TL") echo "selected"; ?>
            >TL</option>
            <option 
                value="MNG"
                <?php if($data['department']=="MNG") echo "selected"; ?>
            >Manager</option>
            <option 
                value="HR"
                <?php if($data['department']=="HR") echo "selected"; ?>
            >HR</option>
            <option 
                value="TE"
                <?php if($data['department']=="TE") echo "selected"; ?>
            >TestEngineer</option>
        </select>
        <label>Salary</label>
        <input type="text" name="salary"  value="<?php echo $data['salary']; ?>">
        <input type="submit" name="update" value="Update Employee">
    </form>

    <?php
        if(isset($_POST['update']))
        {
            $empid = $_POST['empid'];
            $name = $_POST['name'];
            $mobile = $_POST['mobile'];
            $email = $_POST['email'];
            $address = $_POST['address'];
            $department= $_POST['department'];
            $salary = $_POST['salary'];

            $qry = "UPDATE employee SET name='$name', mobile=$mobile, email='$email', address='$address', department='$department', salary=$salary WHERE empid=$id";

            //$qry = "INSERT INTO employee VALUES(0, '$name', $mobile, '$email', '$address', '$department', $salary)";

            if(mysqli_query($con, $qry)){
                ?>
                    <script>
                        alert("One record updated");
                        window.location="display.php";
                    </script>
                <?php
                header("loation:display.php");
                } else {
                    echo "<p>Error: ".mysqli_error($con)."</p>";
                }
            }
    ?>
</body>
</html>