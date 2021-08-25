<?php
    require("db.php"); 
    extract($_POST); 
 
    $sql = "INSERT INTO signin (email, password) VALUES ('$email' , '$pass' )";
    $res = mysqli_query($con,$sql);

    header("location:home.php?msg=sing in successfull");
?>