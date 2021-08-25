<?php

    include "template/logo.php";
    include "template/nav.php";  
?>

<?php
print "<h1>Category list page</h1>";
require("require.login.php");
require("db.php");

if(isset($_REQUEST['msg']))
{
  $t = $_REQUEST['msg'];
  echo "<div class='alert' role='alert'>
  <button type='button' class='close' data-dismiss='alert' aria-label='Close' style='float:right; width: 30px;'><span aria-hidden='true'>&times;</span></button>
  <strong> $t</strong> 
</div>";} 

$limit = 3;
$start = 0;
 
$sql = "SELECT * FROM `category`";
$res = mysqli_query($con,$sql);
$tot = mysqli_num_rows($res);
$pages = ceil($tot / $limit);


if(isset($_REQUEST['p'])){
    $start = ($_REQUEST['p'] - 1) * $limit;
} 
 
$where = "";
if(isset($_POST['srching'])){
    $where = "WHERE category like '%$_POST[srching]%'";
}

if($where == ""){
    $sql = "SELECT * FROM `category` $where LIMIT $start,$limit";
    $res = mysqli_query($con,$sql);
}
else
{
    $sql = "SELECT * FROM `category` $where";
    $res = mysqli_query($con,$sql);
}
print "<div style='float:left; clear:both; width:70%;'><form action='' method='post'>
<input type='text' name='srching' placeholder='search anything'><button>Search</button>
</form>";


print "<a href='category.php'>show all</a></div>";

print "<table border='1' width='100%' style='border-collapse:collapse; text-align:center;' cellpadding='8'>
<tr>
  <th scope='col'>Sl no </th>
  <th scope='col'>Id</th>
  <th scope='col'>Category</th>
  <th scope='col'>Options</th>       
</tr>
";
 
$i=1;
while($row = mysqli_fetch_assoc($res)){ 
    print "
    <tr>
        <td>$i</td>
        <td>$row[id]</td>
        <td>$row[category]</td> 
        <td><a href='editing-cat.php?msg=$row[id]'>Edit</a> | <a href='delete-cat.php?msg=$row[id]'>Delete</a></td>
    </tr>";
    $i++;
}    
 
?>

<?php
    include "template/foot.php";
?> 


<div style=" width:200px;  float:right;"> 
  <nav class="cl-effect-12  ">  
    <a href="add.category.php">Add-Data</a>
  </nav>  
</div>
<?php
    for($i=1; $i<=$pages;$i++){ 
      print "|<a href='?p=$i'>$i</a> | ";
    } 
?> 

 
<!-- <?php
    include "template/footer.php";
?> -->