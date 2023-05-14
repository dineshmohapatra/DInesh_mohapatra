<?php
    $con=mysqli_connect("localhost","root","","mydb") or die(mysqli_error($con));
    $qry="select * from student1";
    $res=mysqli_query($con,$qry);
    if(mysqli_num_rows($res)>0){
        echo "<table border='1' align='center' cellpadding='3'>";
        echo "<caption>Available Student Records</caption>";
        echo "<tr><th>ROll</th><th>Mobile</th><th>Address</th><th>Branch</th><th>Action</th>";
        while($student1=mysqli_fetch_assoc($res)){
            echo "<tr><td>$student1[roll]</td>
                        <td>$student1[name]</td>
                        <td>$student1[mobile]</td>
                        <td>$student1[address]</td>
                        <td>$student1[branch]</td>
                        <td>
                            <a href='update.php?roll=$student1[roll]'>Update</a>
                            <a href='delete.php?roll=$student1[roll]'>Delete</a>
                        </td></tr>";
        }
        echo "</table>";
    }
?>