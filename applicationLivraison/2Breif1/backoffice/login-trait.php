<?php 
require_once('../backoffice/include/connection.php');
session_start();
    if(isset($_POST['Login']))
    {
       if(empty($_POST['UName']) || empty($_POST['Password']))
       {
            header("location:login.php?Empty= Please Fill in the Blanks");
       }
       else
       {
            $query="select * from admin where email='".$_POST['UName']."' and pass='".$_POST['Password']."'";
            $result=mysqli_query($con,$query);

            if(mysqli_fetch_assoc($result))
            {
                $_SESSION['User']=$_POST['UName'];
                header("location:ajoutplat.php");
            }
            else
            {
                header("location:login.php?Invalid= Please Enter Correct User Name and Password ");
            }
       }
    }
    else
    {
        echo 'Not Working Now Guys';
    }

?>