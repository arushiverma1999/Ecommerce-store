<?php
require('includes/common.php');
if(isset($_SESSION['email']))
{
    header('products.html');
}
?>



<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
        <script src="jquery-3.4.1.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="index.css">
        </head>
        <body>

            <div id="banner_image">
                <div class="container" >
                    <div id="banner_content">
                      <a href="products.php"><button class="btn btn-primary btn-lg-active">Shop Now</button></a>      
                      <?php
                            include 'includes/header.php';

                      ?>
                    </div>

                </div>
            </div>
            <br>
            <?php
            include'includes/footer.php';
            ?>
        </body>
 </html>