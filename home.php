<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="/css/bootstrap.css">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="home.css">
</head>
<body>

<?php
require("require.login.php");

    if(isset($_REQUEST['msg']))
        {print "<div class='alert' role='alert'>
            <button type='button' class='close' data-dismiss='alert' aria-label='Close' style='float:right; width: 30px;'><span aria-hidden='true'>&times;</span></button>
            <strong>Success!</strong> You have been signed in successfully!
          </div>";}
    ?> 
    
    <div class="banner">
        <nav class="cl-effect-12">
            <img src="/img/l2.PNG" alt="" class="logo"> 
                <a href="logout.php">Log out</a>
                <a href="feedback.php">Feedback</a> 
                <a href="category.php">Category</a> 
                <a href="products.php">Products</a>  
        </nav>

        <div class="content">
            <h1>Design your Data</h1>
            <p>Follow me for Know more. about the latest updates.</p>

            <div>
                <button type="button" class="custom-btn btn-11">Demonstration</button>
                <button type="button" class="custom-btn btn-11">
                     Subscription
                </button>
            </div>

        </div> 

    </div>   


    
 

</body>
</html>