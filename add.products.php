<?php

include "template/logo.php";
include "template/nav.php";
?>
<h1>Adding product Page</h1>
<form action="add.prod.php" method="POST"  enctype="multipart/form-data">
     <input type="text" class="inp"; name="prod" id="name" required placeholder="Select Product" list="class_number" >
    <datalist id="class_number" class="inp" >
        <?php
            require("db.php");
            $sql = "SELECT `category` FROM `category`";
            $res = mysqli_query($con,$sql);
            while($row = mysqli_fetch_assoc($res))
            {
                print "<option value='$row[category]'></option>";
            } 
        ?>
    </datalist>

    <input type='name' required class='inp' name='nme'  placeholder='Name...'></input><br>

    <input type='number' required class='inp' name='price'  placeholder='Price...'></input><br>
    <div  style="margin-top:20px; color:black;">
                  Upload you pic :
                  <input  type="file" name="file" id="file">
                </div>
    <button type='submit'  class='btn btn-primary float  mx-auto '>Add Product</button>
</form> 
<?php
    include "template/footer.php";
?> 