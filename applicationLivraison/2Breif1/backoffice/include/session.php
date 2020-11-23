<?php
    session_start();

    if(isset($_SESSION['User']))
    {
         $_SESSION['User'];
        
    }
    else
    {
        header("location:login.php");
    }

?>
