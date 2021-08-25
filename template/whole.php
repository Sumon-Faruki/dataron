<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>whole</title>
  <link rel="stylesheet" href="whole.css">
  <link rel="stylesheet" href="/css/bootstrap.css">
  <script src="https://kit.fontawesome.com/f516eb2fbf.js" crossorigin="anonymous"></script>
    
</head>
<body>
  <div class="header justify-content-center">  
    <img src="/img/l2.PNG" alt="" class="logo">  
  </div>

  <div class="navbar  justify-content-center"> 
    <nav class="cl-effect-12"> 
      <a href="view.data.php">View-Data</a>
      <a href="add.data.php">Add-Data</a>
      <a href="category.php">Category</a>
      <a href="products.php">Products</a>
      <a href="client.php">Client</a>
    </nav> 
  </div>


  <div class="gap">
    <div class="mx-auto w-50 shadow card p-4 mt-4"></div>
  </div>

  <div class="contain">
    <div class="mx-auto w-50 shadow card p-4 mt-4">
       <?php 
           print "
           <table class='table'>
             <thead>
               <tr>
                 <th scope='col'>Id</th>
                 <th scope='col'>Name</th>
                 <th scope='col'>Age</th>
                 <th scope='col'>Options</th>
               </tr>
             </thead>
             <tbody>
           ";
           $i=1;
           foreach($row as $r){
            print "
            <tr>
                 <th scope='row'>$r[0]</th>
                 <td>$r[1]</td>
                 <td>$r[2]</td>
                 <td><a href='edit.php?data=$r[1],$r[2]'>edit</a> | <a href='delete.php?data=$r[0],$r[1],$r[2]'>del</a></td>
           </tr>
           ";
           $i++;
           }
           
           print " </tbody>
           </table>"; 
      ?> 
     </div>
  </div>



  <div class="footers">
    <footer class="site-footer">
      <div class="container">
        <div class="row">
          <div class="col-sm-12 col-md-6">
            <h6>About</h6>
            <p class="text-justify">We will help you to build up concepts in different programming languages that include C, C++, Java, HTML, CSS, Bootstrap, JavaScript, PHP, Android, SQL and Algorithm.</p>
          </div>

          <div class="col-xs-6 col-md-3">
            <h6>Categories</h6>
            <ul class="footer-links">
              <li><a href="ge/">C</a></li>
              <li><a href="d-development/">UI Design</a></li>
              <li><a href="-development/">PHP</a></li>
              <li><a href="gramming-language/">Java</a></li>
              <li><a href="">Android</a></li>
              <li><a href="s/">Templates</a></li>
            </ul>
          </div>

          <div class="col-xs-6 col-md-3">
            <h6>Quick Links</h6>
            <ul class="footer-links">
              <li><a href="/">About Us</a></li>
              <li><a href="ct/">Contact Us</a></li>
              <li><a href="ibute-at-/">Contribute</a></li>
              <li><a href="cy-policy/">Privacy Policy</a></li>
              <li><a href="ap/">Sitemap</a></li>
            </ul>
          </div>
        </div>
        <hr>
      </div>
      <div class="container">
        <div class="row">
          <div class="col-md-8 col-sm-6 col-xs-12">
            <p class="copyright-text">Copyright &copy; 2017 All Rights Reserved by 
         <a href="#"></a>.
            </p>
          </div>
          <div class="col-md-8 col-sm-6 col-xs-12">
            <p class="copyright-text">Copyright &copy; 2017 All Rights Reserved by 
         <a href="#"></a>.
            </p>
          </div>
          <div class="col-md-8 col-sm-6 col-xs-12">
            <p class="copyright-text">Copyright &copy; 2017 All Rights Reserved by 
         <a href="#"></a>.
            </p>
          </div>
          <div class="col-md-8 col-sm-6 col-xs-12">
            <p class="copyright-text">Copyright &copy; 2017 All Rights Reserved by 
         <a href="#"></a>.
            </p>
          </div>
          <div class="col-md-8 col-sm-6 col-xs-12">
            <p class="copyright-text">Copyright &copy; 2017 All Rights Reserved by 
         <a href="#"></a>.
            </p>
          </div>
          <div class="col-md-8 col-sm-6 col-xs-12">
            <p class="copyright-text">Copyright &copy; 2017 All Rights Reserved by 
         <a href="#"></a>.
            </p>
          </div>
          <div class="col-md-8 col-sm-6 col-xs-12">
            <p class="copyright-text">Copyright &copy; 2017 All Rights Reserved by 
         <a href="#"></a>.
            </p>
          </div>
          <div class="col-md-8 col-sm-6 col-xs-12">
            <p class="copyright-text">Copyright &copy; 2017 All Rights Reserved by 
         <a href="#"></a>.
            </p>
          </div>
          <div class="col-md-8 col-sm-6 col-xs-12">
            <p class="copyright-text">Copyright &copy; 2017 All Rights Reserved by 
         <a href="#"></a>.
            </p>
          </div>
          <div class="col-md-8 col-sm-6 col-xs-12">
            <p class="copyright-text">Copyright &copy; 2017 All Rights Reserved by 
         <a href="#"></a>.
            </p>
          </div>
          <div class="col-md-8 col-sm-6 col-xs-12">
            <p class="copyright-text">Copyright &copy; 2017 All Rights Reserved by 
         <a href="#"></a>.
            </p>
          </div>
          <div class="col-md-8 col-sm-6 col-xs-12">
            <p class="copyright-text">Copyright &copy; 2017 All Rights Reserved by 
         <a href="#"></a>.
            </p>
          </div>
          <div class="col-md-8 col-sm-6 col-xs-12">
            <p class="copyright-text">Copyright &copy; 2017 All Rights Reserved by 
         <a href="#"></a>.
            </p>
          </div>
          <div class="col-md-8 col-sm-6 col-xs-12">
            <p class="copyright-text">Copyright &copy; 2017 All Rights Reserved by 
         <a href="#"></a>.
            </p>
          </div>
          <div class="col-md-8 col-sm-6 col-xs-12">
            <p class="copyright-text">Copyright &copy; 2017 All Rights Reserved by 
         <a href="#"></a>.
            </p>
          </div>
          <div class="col-md-8 col-sm-6 col-xs-12">
            <p class="copyright-text">Copyright &copy; 2017 All Rights Reserved by 
         <a href="#"></a>.
            </p>
          </div>
          <div class="col-md-8 col-sm-6 col-xs-12">
            <p class="copyright-text">Copyright &copy; 2017 All Rights Reserved by 
         <a href="#"></a>.
            </p>
          </div>
           
          

          <div class="col-md-4 col-sm-6 col-xs-12">
            <ul class="social-icons">
              <li><a class="facebook" href="#"><i class="fa fa-facebook"></i></a></li>
              <li><a class="twitter" href="#"><i class="fa fa-twitter"></i></a></li>
              <li><a class="dribbble" href="#"><i class="fa fa-dribbble"></i></a></li>
              <li><a class="linkedin" href="#"><i class="fa fa-linkedin"></i></a></li>   
            </ul>
          </div>
        </div>
      </div>
</footer>
  </div>

</body>
</html> 