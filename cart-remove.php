<?php
require 'includes/common.php';
$id=$_GET['id'];
$user_id=$_SESSION['user_id'];
$delete_query="DELETE FROM users_items WHERE user_id='$user_id' AND item_id='$id' "
or
die(mysqli_error($con));
$delete_query_result=mysqli_query($con,$delete_query);
if($delete_query_result)
{
    header('location:cart1.php');
}
?>