 <?php

    include "template/logo.php";
    include "template/nav.php";
    ?>
    <h1>New product create Page</h1>
    <form action="add.cate.php" method=POST>
        <input type='name' required class='inp' name='category'  placeholder='Category Name...'></input><br> 

        <button type='submit'  class='btn btn-primary float 2' >Add Category</button>
    </form> 
    <?php
        include "template/footer.php";
    ?> 