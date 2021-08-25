<?php
  session_start(); 
    if(!$_SESSION['login_id'])
        header("location:about.php");
?>