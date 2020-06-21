<?php
require'includes/common.php';
if(isset($_SESSION['email_id']))
{
    location:'products.php';
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
                <?php
                    include'includes/header.php';
                ?>

            <div class="container ">
            <form class="location" method="POST" action="signup_script.php">
                <div class="row">
                    <div class="col-xs-4 col-xs-offset-4">
                    <h3 class="center">SIGN UP</h3>
                    <div class="form-group">
                        <input type="text" class="form-control " placeholder="Name" name="name"> 
                    </div> 
                     <div class="form-group">
                        <input type="email" class="form-control " placeholder="Email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" name="email">
                        <div> <?php 
                        if(isset($_GET['email_error']))
                        echo $_GET['email_error'];
                        
                        ?></div>
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control " placeholder="Password" pattern=".{6,}" name="password">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control " placeholder="Contact" name="contact">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control " placeholder="City" name="city">
                        
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control " placeholder="Address" name="address">
                        
                    </div>
                    <button class="btn btn-primary">SUBMIT</button>

                </div>
            </div>
            
            </form>
         <br>
                
                </div>
                
              <?php
                include'includes/footer.php';
              
              ?>
        
    
        </body>
        </html>
