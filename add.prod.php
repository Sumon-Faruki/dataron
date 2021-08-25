<?php
    require("db.php"); 
    extract($_POST);
    extract($_FILES['file']);  
    $id = rand(0.999);
    $name_img = $id."-".$name_img;
    $path = "img/";
    $full_path = $path.$name_img; 

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
     
    $sql = "SELECT * FROM `category` WHERE `category` LIKE '%$prod%'";
    $res = mysqli_query($con,$sql);
    $row = mysqli_fetch_assoc($res);
    $cat_id = $row['id']; 

    $sql = "INSERT INTO product (cat_id, name, price, image) VALUES ('$cat_id', '$nme', '$price', '$full_path' )";
    $res = mysqli_query($con,$sql);
    header("location:products.php?msg=Added succesfully");
?>