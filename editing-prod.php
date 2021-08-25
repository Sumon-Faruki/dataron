<?php 
    include "template/logo.php";
    include "template/nav.php";
?>
 <?php
    $id = $_REQUEST['msg'];
    require("db.php");
    $sql = "SELECT `category` FROM `category`";
    $res = mysqli_query($con,$sql);
    print "<h1>Editing Page</h1>";
    print "<form action='edit-prod.php?msg=$id' method='POST'  enctype='multipart/form-data'>
        <input type='text' class='inp'; name='prod' id='name' required placeholder='Select Product' list='class_number' >
        <datalist id='class_number' class='inp' >"; 
            while($row = mysqli_fetch_assoc($res))
            {
                echo "<option value='$row[category]'></option>";
            }  
        print "</datalist>

        <input type='name' required class='inp' name='nme'  placeholder='Product Name...'></input><br>

        <input type='number' required class='inp' name='price'  placeholder='Product Price...'></input><br> 
        <div  style='margin-top:20px; color:black;'>
                    Upload you pic :
                    <input  type='file' name='file' id='file'>
                    </div>
        <button type='submit'  class='btn btn-primary float  mx-auto '>Edit Product</button>
    </form>";
?>



<?php
    include "template/footer.php";
?> 





<?php 
die();
    include "template/logo.php";
    include "template/nav.php";  
    
?>

<?php 
    $id = $_REQUEST['msg'];

        require("db.php");
            $sql = "SELECT `category` FROM `category`";
            $res = mysqli_query($con,$sql); 

    print "<form action='edit-prod.php?msg=$id' method='POST'>
    <input type='text' class='inp'; name='prod' id='name' required placeholder='Select Product' list='class_number' >
    <datalist id='class_number' class='inp' >
        <option value='Buisness'></option>
        <option value='Whatsapp'></option>
        <option value='Facebook'></option>
        <option value='Twitter'></option>
        <option value='Worthless'></option>
        <option value='Academic'></option> 
    </datalist>

    <input type='name' required class='inp' name='nme'  placeholder='Product Name...'></input><br>

    <input type='number' required class='inp' name='price'  placeholder='Product Price...'></input><br>

    <button type='submit'  class='btn btn-primary float' >Edit Product</button>
    </form>"
?> 

<?php
    include "template/footer.php";
?>