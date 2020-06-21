<?php
    require 'includes/common.php';
    if(!isset($_SESSION['email']))
    {
        header('location:index.php');
    }
    $user_id=$_SESSION['user_id'];
    $join_query="SELECT* FROM users_items INNER JOIN items on users_items.item_id=items.pid where users_items.user_id='$user_id' and status='Added to cart' "
    or die(mysqli_error($con));
    $join_query_result=mysqli_query($con,$join_query);
    $row=mysqli_fetch_array($join_query_result);

   
    if(mysqli_num_rows($join_query_result)==0)
    {
        echo "add items to the cart first! ";
    }
    else{
       
        while($row=mysqli_fetch_array($join_query_result))
        {
           
            $sum=0;
            $sum=$sum+$row['price'];
            $id=$row['id'];
            echo $row['id']."<br>".$row['name'];
        
            $id++;
        }
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
       include 'include/header.php';
    ?>   
        <br>
        <br>
        <br>
        <div class="container">
        <table class="table table-bordered table-striped">
        <tr>
            <th>item no</th>
            <th>item name</th>
            <th>price</th>
            <th></th>
        </tr>
        <tr>
            <td>

            </td>
            <td>
              
            </td>
            <td>
            
            </td>
            <td>
               
            </td>
        </tr>
        <tr>
            <td>

            </td>
            <td>
                total
            </td>
            <td>
                rs 0
            </td>
            <td>
                <button class="btn btn-primary">
                    add to cart
                </button>
            </td>
        </tr>
    </table>
</div>
<?php

    include 'includes/footer.php';
?>
    </body>
</html>
