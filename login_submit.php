<?php
    include'includes/common.php';
    $email=mysqli_real_escape_string($con,$_POST['email']);
    $password=mysqli_real_escape_string($con,$_POST['password']);
    $encryptpass= md5($password);
    $select_query=" SELECT id,email
                    FROM users
                    WHERE email='$email'
                    AND password='$password';
                    ";
    $select_query_result=mysqli_query($con,$select_query)
    OR die(mysqli_error($con));
    $totalrows=mysqli_num_rows($select_query_result);
    if($totalrows==0)
    {
        echo"no user found";
    }
    else{
        $row=mysqli_fetch_array($select_query_result);
       
        
        $_SESSION['email']=$email;
        $_SESSION['user_id']=$row['id'];
        if(isset($_SESSION['email']))
        {
           header( 'location: products.php');
        }
        
    }
 
?>