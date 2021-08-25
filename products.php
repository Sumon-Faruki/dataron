<?php

    include "template/logo.php";
    include "template/nav.php";  
?>

<?php
print "<h1>Product list Page</h1>";
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
 
$sql = "SELECT * FROM `product`";
$res = mysqli_query($con,$sql);
$tot = mysqli_num_rows($res);
$pages = ceil($tot / $limit);


if(isset($_REQUEST['p'])){
    $start = ($_REQUEST['p'] - 1) * $limit;
} 
 
$where = "";
if(isset($_POST['srching'])){
    $where = "WHERE name like '%$_POST[srching]%'";
}

if($where == ""){
    $sql = "SELECT * FROM `product` $where LIMIT $start,$limit";
    $res = mysqli_query($con,$sql);
}
else
{
    $sql = "SELECT * FROM `product` $where";
    $res = mysqli_query($con,$sql);
}

print "<div style='float:left; clear:both; width:70%;'><form action='' method='post'>
            <input type='text' name='srching' placeholder='search anything'><button>Search</button>
        </form>";


print "<a href='products.php'>show all</a></div>";

print "<table border='1' width='100%' style='border-collapse:collapse; text-align:center;' cellpadding='8'>
<tr>
  <th scope='col'>Sl no </th>
  <th scope='col'>product Id </th>
  <th scope='col'>Category Id</th>
  <th scope='col'>Product Name</th> 
  <th scope='col'>Product Price</th>
  <th scope='col'>Product image</th>
  <th scope='col'>Options</th>       
</tr>
";
 
$i=1;
while($row = mysqli_fetch_assoc($res)){ 
    print "
    <tr>
        <td>$i</td>
        <td>$row[id]</td> 
        <td>$row[cat_id]</td> 
        <td>$row[name]</td>
        <td>$row[price]</td>
        <td><img src='$row[image]' style='width:50px;height:60px'></td>
        <td><a href='editing-prod.php?msg=$row[id]'>Edit</a> | <a href='delete-prod.php?msg=$row[id]'>Delete</a></td>
    </tr>";
    $i++;
} 

?>


<div style=" width:300px;  float:right;"> 
  <nav class="cl-effect-12  ">  
    <a href="add.products.php">Add-Product</a>
  </nav>  
</div> 
<?php
    for($i=1; $i<=$pages;$i++){ 
      print "|<a href='?p=$i'>$i</a> | ";
    } 
?> 

<?php
    include "template/foot.php";
?> 
<!-- <?php
    include "template/footer.php";
?> -->
 
