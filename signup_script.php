<?php
require'includes/common.php';

$email = $_POST['email'];
$regex_email = "/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/";
if (!preg_match($regex_email, $email)) {
  header('location: index.php?email_error=enter correct email');
}

$name=$_POST['name'];

$password=$_POST['password'];
$contact=$_POST['contact'];
$city=$_POST['city'];
$address=$_POST['address'];

$select_query="SELECT id FROM users WHERE email='$email'";
$select_query_result=mysqli_query($con,$select_query)
or 
die(mysqli_error($con));
$totalrows_fetched=mysqli_num_rows($select_query_result);

if($totalrows_fetched>0){
    echo"user slready exists";
}
else{
$insertdata="INSERT INTO users (name,email,password,contact,city,address) values ('$name','$email','$password','$contact','$city','$address') ";

$insertdata_run=mysqli_query($con,$insertdata)
or 
die(mysqli_error($con));
echo"inserted succesfully";
}
$primary_key=mysqli_insert_id($con);
echo $primary_key;
$_SESSION['id']=$primary_key;
if(isset($_SESSION['id']))
{
    header('location:products.php');
}
?>