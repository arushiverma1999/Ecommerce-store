<?php
$con=mysqli_connect("localhost","root","","store")
OR
die(mysqli_error($con));
if(!isset($_SESSION))
{
    session_start();
};

?>