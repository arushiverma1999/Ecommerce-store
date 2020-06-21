<?php
    if(!isset($_SESSION))
    {
        SESSION_START();
    }   
        if(!isset($_SESSION['email']))
        {
            header('location:index.php');
        }
        session_destroy();
        header('location:index.php');

?>