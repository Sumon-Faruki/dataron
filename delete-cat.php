<?php
    require("db.php");

    $id = $_REQUEST['msg'];
    $sql = "DELETE FROM `category` WHERE `id`='$id'";
    $res = mysqli_query($con,$sql);

    header("location:category.php?msg=Id number $id has been deleted.");


    ?> 