<?php
    require("db.php");
 
    extract($_POST); 

    $id = $_REQUEST['msg']; 
 
    $sql = " UPDATE `category` SET `category`='$categ', name='$nme', `price`='$price' WHERE `id` = '$id';";

    $res = mysqli_query($con,$sql);
    
    header("location:category.php?msg=Edited succesfully.");


    ?>