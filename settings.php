<!DOCTYPE html>
<?php
        require 'includes/common.php';
        if(!isset($_SESSION['email']))
        {
            header('location:index.php');

        }


?>

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
                include 'includes/header.php';
            ?>
           <br>
           <br>
           <br>
           <br>
            <div class="container">
                <form method="POST" action="settings_script.php">
               <div class="row ">
                   <div class="col-xs-4 col-xs-offset-4">
                   <h3> Change Password</h3>
                   <div class="form-group">
                       <input class="form-control" placeholder="Old Password" type="text" name="old_pass">
                   </div>
                   <div class="form-group">
                    <input class="form-control" placeholder="New Password" type="text" name="new_pass" >
                </div>
                <div class="form-group">
                    <input class="form-control" placeholder="Re-enter new Password" type="text" name="newest_pass">
                    <?php 
                    if(isset($_GET['msg_error']))
                    {
                        echo $_GET['msg_error'];
                    }
               ?>
                </div>
                <button class="btn btn-primary" type="submit">Change</button>
               </div>
               <div>
               
               </div>
            </div>
            </div>
            </form>
            </div>