<?php
        require'includes/common.php';

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
        <div class="panel panel-primary ">
                <div class="panel-heading">
                    <h3>LOGIN</h3>
              </div>
              <div class="panel-body">
                    <p class="text-warning"> login to make purchase </p>
                    <form method="post" action="login_submit.php">
                      <div class="form-group">
                          <input type="email" class="form-control" placeholder="email" name="email" >

                      </div>
                      <div class="form-group">
                        <input type="password" class="form-control" placeholder="password" name="password">

                    </div>
                    <button type="submit" class="btn btn-primary">
                        Login
                    </button>

                    </form>
                    
              </div>
                    <div class="panel-footer">
                        <p>Don't have an account?<span class="text-primary"> Register</span></p>
                    </div>
        </div>
        <?php
                include'includes/footer.php';
        ?>
    </body>
    </html>