<?php
    require("db.php");

    $id = $_REQUEST['msg'];
    $sql = "DELETE FROM `product` WHERE `id`='$id'";
    $res = mysqli_query($con,$sql);

    header("location:products.php?msg=Product Id number $id has been deleted."); 
?> 