<?php
    session_start();
    session_destroy();
    header("location:about.php?message=Log out Succesfull.");
?>