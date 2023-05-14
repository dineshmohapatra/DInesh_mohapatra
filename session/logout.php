<?php 
    session_start();
    unset($_SESSION['name']);
    echo $SESSION['name'];
    session_destroy();
    header("location: home.php");
?>