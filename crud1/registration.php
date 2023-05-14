<?php
    require "display.php";
?>
<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
      
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <center>
        <h1>Add Student</h1>
    </center>
    <form action="insert.php" method="post">
        <table align="center">
            <tr><td>Roll NO:</td>
            <td><input type="text" name="roll"></td></tr>
            <tr><td>Name:</td>
            <td><input type="text" name="name"></td></tr>
            <tr><td></td>
            <tr><td>Mobile:</td>
            <td><input type="mobile" name="mobile"></td></tr>
            <tr><td></td>
            <tr><td>Address:</td>
            <td>
              <textarea name="address" rows="3" cols="21"></textarea></td>
            </tr>
            <tr><td>Branch:</td>
                <td><select name="branch">
                    <option value="">--select--</option>
                    <option value="BCA">BCA</option>
                    <option value="BBA">BBA</option>
                    <option value="MCA">MCA</option>
                    <option value="MCA">MCA</option>
                </select>
                </td>
            </tr>
            <tr><td colspan="2" align="right">
                <input type="submit" value="ADD" name="submit">
            </td></tr>
        </table>
    </form>
</body>
</html>