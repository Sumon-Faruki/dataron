<?php

    include "template/logo.php";
    include "template/nav.php";  
?>

<?php 
    print "<h1>Add category detail </h1>";
    $id = $_REQUEST['msg'];
    print "<form action='edit-cat.php?msg=$id' method='POST'>
    <input type='text' class='inp'; name='categ' id='name' required placeholder='Select Category' list='class_number' >
    <datalist id='class_number' class='inp' >
        <option value='Buisness'></option>
        <option value='Whatsapp'></option>
        <option value='Facebook'></option>
        <option value='Twitter'></option>
        <option value='Worthless'></option>
        <option value='Academic'></option> 
    </datalist>

    <input type='name' required class='inp' name='nme'  placeholder='Name...'></input><br>

    <input type='number' required class='inp' name='price'  placeholder='Price...'></input><br>

    <button type='submit'  class='btn btn-primary float 2' >Add Category</button>
    </form>"
?> 

<?php
    include "template/footer.php";
?>