<?php
function check_if_added_to_cart($item_id)
{
  require 'includes/common.php';
  $user_id=$_SESSION['user_id'];
  $select_query=" select * from users_items where item_id='$item_id' and user_id='$user_id' and status='added to cart'"
  or
  die (mysqli_error($con));
  $select_query_result=mysqli_query($con,$select_query);
  $num_rows=mysqli_num_rows($select_query_result);
  if($num_rows>=1)
  {
      return 1;
  }
  else
  {
    return 0;
  }
}
?>