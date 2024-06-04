<?php
session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <link rel="shortcut icon" href="img/logo.png" />
        <title>Online grocery store</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- latest compiled and minified CSS -->
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" type="text/css">
        <!-- jquery library -->
        <script type="text/javascript" src="bootstrap/js/jquery-3.2.1.min.js"></script>
        <!-- Latest compiled and minified javascript -->
        <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
        <!-- External CSS -->
        <link rel="stylesheet" href="css/style.css" type="text/css">
    </head>
    <body>
        <div>
           <?php
            require 'header.php';
           ?>
           <div id="bannerImage">
               <div class="container">
                   <center>
                   <div id="bannerContent">
				       <h1>Global Fresh Market</h1>
					   <h1>We Sell</h1>
                       <p>Up to 40% OFF on all Latest brands.</p>
                       <a href="products.php" class="btn btn-danger">Shop Now</a>
                   </div>
                   </center>
               </div>
           </div>
           <div class="container">
               <div class="row">
                   <div class="col-xs-4">
                       <div  class="thumbnail">
                           <a href="products.php">
                                <img src="img/j33.jpg" alt="Fuits">
                           </a>
                           <center>
                                <div class="caption">
                                        <p id="autoResize">Fruits</p>
                                        <p>Eat fresh & healthy fruits.</p>
                                </div>
                           </center>
                       </div>
                   </div>
                   <div class="col-xs-4">
                       <div class="thumbnail">
                           <a href="products.php">
                               <img src="img/frnt2.jpg" alt="Vegetables">
                           </a>
                           <center>
                                <div class="caption">
                                    <p id="autoResize">vegetables</p>
                                    <p>Eat fresh & healthy vegetables..</p>
                                </div>
                           </center>
                       </div>
                   </div>
                   <div class="col-xs-4">
                       <div class="thumbnail">
                           <a href="products.php">
                               <img src="img/frnt3.jpg" alt="oils">
                           </a>
                           <center>
                               <div class="caption">
                                   <p id="autoResize">oils</p>
                                   <p>Original Oils from the best brands..</p>
                               </div>
                           </center>
                       </div>
                   </div>
               </div>
           </div>
            <br><br> <br><br><br><br>
           <footer class="footer"> 
               <div class="container">
               <center>
                   <p>Use <a href="">online grocery Store.! </a> </p>
                   <p>All-in-one Marketing & Technology Solution for your Online Shopping.</p>
               </center>
               </div>
           </footer>
        </div>
    </body>
</html>