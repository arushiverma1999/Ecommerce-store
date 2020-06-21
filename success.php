<?php
require 'includes/common.php';
if(isset($_SESSION['email']))
{
    header('location:index.php');
}
?>