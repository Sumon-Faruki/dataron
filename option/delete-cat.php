<?php
    require("/project1/db.php");

    $id = $_REQUEST['msg'];
    $sql = "DELETE FROM `category` WHERE `id`='$id'";
    $res = mysqli_query($con,$sql);

    header("location:/project1/category.php?msg=Deleted");


    ?> 