<?php
session_start();
extract($_POST);

require("db.php"); 

$sql = "SELECT * FROM `signin` WHERE `email`='$email' AND `password`='$pass'";
$res = mysqli_query($con,$sql);
$count = mysqli_num_rows($res);

if ($count == 1) {
    $row = mysqli_fetch_assoc($res);
    $_SESSION['login_id'] =  $row['id'];
    header("location:home.php");
}
else
{
    header("location:about.php?message=Wrong user name password");
    
}

?>