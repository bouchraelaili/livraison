<?php

    $con=mysqli_connect('localhost','root','1234','livraison');

    if(!$con)
    {
        die(' Please Check Your Connection'.mysqli_error($con));
    }
?>