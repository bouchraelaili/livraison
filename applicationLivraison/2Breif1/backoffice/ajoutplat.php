<?php require('../backoffice/include/session.php');?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="style.css">

<title>AjouterPlat</title>
</head>
<body>
<?php require('include/nav-bar.php');?>




<div style="margin-left:25%;padding:1px 16px;">
<center><p class="parg1">Ajouter Un Plat</p></center>
<form action="../fonction/addplat.php" method="post" enctype="multipart/form-data" >
    <div class="container">
  <div class="form-row">
    <div class="form-group col-md-6">
      <label >Nom</label>
      <input type="text" name="nom" class="form-control" >
    </div>
    <div class="form-group col-md-6">
      <label >Image</label>
      <input type="file" name="image" class="form-control" >
    </div>
  </div>
  <div class="form-group">
    <label >Prix</label>
    <input type="text" name="prix" class="form-control">
  </div>
  <div class="form-row">
    <div class="form-group col-md-12">
      <label >Déscription</label>
      <textarea  name="Déscription" class="form-control rounded-0"  rows="10"></textarea>
    </div>
   
  </div>
  <button type="submit" class="btn" style="background-color:black;color:white">Ajouter</button>
  </div>
</form>
 
</div>



  
</body>


<!-- jQuery and JS bundle w/ Popper.js -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</html>