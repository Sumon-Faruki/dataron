<?php 
    $id = $_REQUEST['msg'];
    print "<form action='edit-cat.php?msg=$id' method='POST'>
        Name: <input type='text' name='nme'><br>
        Gender: <input type='radio'  name='gender' value='Male'>
          <label for='Male'>Male</label>
        <input type='radio'  name='gender' value='female'>
          <label for='female'>Female</label><br>
        <button>Submit</button>
    </form>"
?> 