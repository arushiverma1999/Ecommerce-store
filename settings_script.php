<?php
        require 'includes/common.php';
        if(!isset($_SESSION['email']))
        {
            header('location:index.php');

        }
            $new_pass=strlen($_POST['new_pass']);
            $newest_pass=strlen($_POST['newest_pass']);
            if($new_pass !== $newest_pass)
            {
                echo "re-enter new password , it doesn match!";
            }
            $email=$_SESSION['email'];
            $select_query="SELECT password from users where email='$email' "
            or
            die(mysqli_error($con));
            $select_query_result=mysqli_query($con,$select_query);
            $row=mysqli_fetch_array($select_query_result);
            $pass=$row[0];
            $new_pass=$_POST['new_pass'];
            $old_pass=$_POST['old_pass'];
            if($pass==$old_pass)
            {
               $update="update users set password='$new_pass' where  users.email='$email' "
               or die(mysqli_error($con));
               $update_result=mysqli_query($con,$update);
               echo "password updated successfully";
            }
            else{
               
                header('location:settings.php?msg_error= password doesnt match');
            }
            

?>