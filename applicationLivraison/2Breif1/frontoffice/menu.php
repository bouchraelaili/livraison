<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="style.css">

<title>commande</title>
</head>
<body>
<?php require('include/nav-bar.php');?>

 <center>

<div class="col-md-7 col-md-offset-2" >
     <div class="panel panel-info">
         <div class="panel-heading">
          Plats
         </div>
         <div class="panel-body">
             <table class="table table-bordered">
             <thead class="thead-dark">
                 <tr>
                     <th>nom</th>
                     <th>description</th>
                     <th>prix</th>
                     <th>image</th>
                     <th>action</th>


                 </tr>
             </thead>
                 <?php 
                 require('../backoffice/include/connection.php');
                 $query = mysqli_query($con,"select * from repas");
                 while ($row =mysqli_fetch_array($query))
                 {
                 echo '<tr><td>'.$row["nom"].'</td>';
                 echo '<td>'.$row["descp"].'</td>';
                 echo '<td>'.$row["prix"].'</td>';
               echo '<td> <img class="card-img-top" src="../frontoffice/img/'.$row["image"].'"  /></td>';
              echo'<td><a href="commander.php"><button type="button" class="btn btn-outline-danger">commander</button></a></td>';

                      ?>
                        <?php
                    } 
                ?>
            </tbody>
             </table>

         </div>

     </div>

</div>


 
              
                  
           
          
 
    </center>

<?php require('include/footer.php');?>

  
</body>


<!-- jQuery and JS bundle w/ Popper.js -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</html>