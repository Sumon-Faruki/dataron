<?php
    require("db.php");
 
    extract($_POST); 
    extract($_FILES['file']);  
    $path = "img/";
    $full_path = $path.$name; 

    if($error == 0)
    {
        if($type == "image/png" || $type == "image/jpeg" || $type == "image/jpg")
        {  
            if($size < 1000000)
                copy($tmp_name, $full_path);
            else
                die("image Size must be less then 1 mb.");
        }
        else
        {
            die("Error in Format.");
        }
    }
    else
    {
        die("Error occure");
    } 

    $id = $_REQUEST['msg']; 

    $sql = "SELECT * FROM `category` WHERE `category` LIKE '%$prod%'";
    $res = mysqli_query($con,$sql);
    $row = mysqli_fetch_assoc($res);
    $cat_id = $row['id']; 
    $sql = " UPDATE `product` SET `cat_id`='$cat_id', name='$nme', `price`='$price', image='$full_path' WHERE `id` = '$id'";

    $res = mysqli_query($con,$sql);
    
    header("location:products.php?msg=Edited succesfully.");


    ?>