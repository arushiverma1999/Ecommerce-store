<?php
require 'includes/common.php';
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
          include 'includes/header.php';
          include 'check-if-added.php';
          ?>
            <div class="container">
               <div class="jumbotron">
                  <h1> Welcome to our Lifestyle Store!</h1>
                  <p>We have the best cameras, watches and shirts for you. No need to hunt around, we have all in one place</p>
               </div>

            </div>
            <div class="row text-center product">
                <div class="col-md-3 col-sm-6 ">
                    <div class="thumbnail">
                        <img src="assests/1.jpg">
                      <div class="caption">
                        <h3>Cannon EOS</h3>
                        <p>price Rs.360000.00</p>
                        <?php 
                            if(!isset($_SESSION['user_id']))
                            {
                                ?>
                               
               
                        
                               <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                       
                       
                         <?php 
                            }
                            else if(check_if_added_to_cart(1))
                            {
                                echo '<a href="#" class="btn btn-block btn-success" disabled >added to cart </a>';
                            }
                            else{

                         ?>
                          <a href="cart-add.php?id=1" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                          <?php
                            }
                            ?>

                    </div>
                    </div>
                </div>

                     
                <div class="col-md-3 col-sm-6">
                    <div class="thumbnail">
                        <img src="assests/2.jpg">
                        <div class="caption">
                            <h3>Sony DSLR</h3>
                            <p>price Rs.400000.00</p>
                            <?php 
                            if(!isset($_SESSION['user_id']))
                            {
                                ?>
                               
               
                        
                               <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                       
                       
                         <?php 
                            }
                            else if(check_if_added_to_cart(2))
                            {
                                echo '<a href="#" class="btn btn-block btn-success" disabled >added to cart </a>';
                            }
                            else{

                         ?>
                          <a href="cart-add.php?id=2" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                          <?php
                            }
                            ?>
                          </div>
                        
                    </div>

                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="thumbnail">
                        <img src="assests/3.jpg">
                        <div class="caption">
                            <h3>Sony DSLR</h3>
                            <p>price Rs.500000.00</p>
                            <?php 
                            if(!isset($_SESSION['user_id']))
                            {
                                ?>
                               
               
                        
                               <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                       
                       
                         <?php 
                            }
                            else if(check_if_added_to_cart(3))
                            {
                                echo '<a href="#" class="btn btn-block btn-success" disabled >added to cart </a>';
                            }
                            else{

                         ?>
                          <a href="cart-add.php?id=3" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                          <?php
                            }
                            ?>
                          </div>
                      
                    </div>

                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="thumbnail">
                        <img src="assests/4.jpg">
                        <div class="caption">
                            <h3>Olympus DSLR</h3>
                            <p>price Rs.800000.00</p>
                            <?php 
                            if(!isset($_SESSION['user_id']))
                            {
                                ?>
                               
               
                        
                               <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                       
                       
                         <?php 
                            }
                            else if(check_if_added_to_cart(4))
                            {
                                echo '<a href="#" class="btn btn-block btn-success" disabled >added to cart </a>';
                            }
                            else{

                         ?>
                          <a href="cart-add.php?id=4" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                          <?php
                            }
                            ?>
                          </div>
                    </div>

                </div>
            </div>
            <div class="row product">
                <div class="col-md-3 col-sm-6">
                    <div class="thumbnail">
                        <img src="assests/9.jpg">
                      <div class="caption">
                        <h3>Titan Model #301</h3>
                        <p>price Rs.1500000.00</p>
                        <?php 
                            if(!isset($_SESSION['user_id']))
                            {
                                ?>
                               
               
                        
                               <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                       
                       
                         <?php 
                            }
                            else if(check_if_added_to_cart(5))
                            {
                                echo '<a href="#" class="btn btn-block btn-success" disabled >added to cart </a>';
                            }
                            else{

                         ?>
                          <a href="cart-add.php?id=5" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                          <?php
                            }
                            ?>
                      </div>
                    </div>

                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="thumbnail">
                        <img src="assests/10.jpg">
                        <div class="caption">
                            <h3>Titan Model #201</h3>
                            <p>price Rs.300000.00</p>
                            <?php 
                            if(!isset($_SESSION['user_id']))
                            {
                                ?>
                               
               
                        
                               <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                       
                       
                         <?php 
                            }
                            else if(check_if_added_to_cart(6))
                            {
                                echo '<a href="#" class="btn btn-block btn-success" disabled >added to cart </a>';
                            }
                            else{

                         ?>
                          <a href="cart-add.php?id=6" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                          <?php
                            }
                            ?>
                          </div>
                        
                    </div>

                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="thumbnail">
                        <img src="assests/11.jpg">
                        <div class="caption">
                            <h3>HMT milan</h3>
                            <p>price Rs.800000.00</p>
                            <?php 
                            if(!isset($_SESSION['user_id']))
                            {
                                ?>
                               
               
                        
                               <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                       
                       
                         <?php 
                            }
                            else if(check_if_added_to_cart(7))
                            {
                                echo '<a href="#" class="btn btn-block btn-success" disabled >added to cart </a>';
                            }
                            else{

                         ?>
                          <a href="cart-add.php?id=7" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                          <?php
                            }
                            ?>
                          </div>
                      
                    </div>

                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="thumbnail">
                        <img src="assests/12.jpg">
                        <div class="caption">
                            <h3>Faber Luba#1</h3>
                            <p>price Rs.800000.00</p>
                            <?php 
                            if(!isset($_SESSION['user_id']))
                            {
                                ?>
                               
               
                        
                               <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                       
                       
                         <?php 
                            }
                            else if(check_if_added_to_cart(8))
                            {
                                echo '<a href="#" class="btn btn-block btn-success" disabled >added to cart </a>';
                            }
                            else{

                         ?>
                          <a href="cart-add.php?id=8" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                          <?php
                            }
                            ?>
                          </div>
                    </div>

                </div>
            </div>
            <div class="row product">
                <div class="col-md-3 col-sm-6">
                    <div class="thumbnail">
                        <img src="assests/8.jpg">
                      <div class="caption">
                        <h3>H&W</h3>
                        <p>price Rs.800.00</p>
                        <?php 
                            if(!isset($_SESSION['user_id']))
                            {
                                ?>
                               
               
                        
                               <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                       
                       
                         <?php 
                            }
                            else if(check_if_added_to_cart(9))
                            {
                                echo '<a href="#" class="btn btn-block btn-success" disabled >added to cart </a>';
                            }
                            else{

                         ?>
                          <a href="cart-add.php?id=9" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                          <?php
                            }
                            ?>
                      </div>
                    </div>

                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="thumbnail">
                        <img src="assests/6.jpg">
                        <div class="caption">
                            <h3>Luis phil</h3>
                            <p>price Rs.300000.00</p>
                            <?php 
                            if(!isset($_SESSION['user_id']))
                            {
                                ?>
                               
               
                        
                               <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                       
                       
                         <?php 
                            }
                            else if(check_if_added_to_cart(10))
                            {
                                echo '<a href="#" class="btn btn-block btn-success" disabled >added to cart </a>';
                            }
                            else{

                         ?>
                          <a href="cart-add.php?id=10" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                          <?php
                            }
                            ?>
                          </div>
                        
                    </div>

                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="thumbnail">
                        <img src="assests/13.jpg">
                        <div class="caption">
                            <h3>John zok</h3>
                            <p>price Rs.1500.00</p>
                            <?php 
                            if(!isset($_SESSION['user_id']))
                            {
                                ?>
                               
               
                        
                               <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                       
                       
                         <?php 
                            }
                            else if(check_if_added_to_cart(11))
                            {
                                echo '<a href="#" class="btn btn-block btn-success" disabled >added to cart </a>';
                            }
                            else{

                         ?>
                          <a href="cart-add.php?id=11" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                          <?php
                            }
                            ?>
                          </div>
                      
                    </div>

                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="thumbnail">
                        <img src="assests/14.jpg">
                        <div class="caption">
                            <h3>Jhalsani</h3>
                            <p>price Rs.1300.00</p>
                            <?php 
                            if(!isset($_SESSION['user_id']))
                            {
                                ?>
                               
               
                        
                               <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                       
                       
                         <?php 
                            }
                            else if(check_if_added_to_cart(12))
                            {
                                echo '<a href="#" class="btn btn-block btn-success" disabled >added to cart </a>';
                            }
                            else{

                         ?>
                          <a href="cart-add.php?id=12" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                          <?php
                            }
                            ?>
                          </div>
                    </div>

                </div>
            </div>
            <br>
            <br>
            <br>
           <?php
           include 'includes/footer.php';
           ?>
    
    </body>
    </html>