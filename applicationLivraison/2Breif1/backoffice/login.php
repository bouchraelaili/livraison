<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="style.css">

<title>login</title>
</head>
<body>
    
<ul class="login">
  <center>
  <h3>Application de livraison </h3> 
  <h4>Page de connection</h4>
  </center>
  
</ul>
<div style="margin-left:35%;padding:1px 16px;">
<p class="parg1" >Connecter</p>
<form action="login-trait.php" method="post">
    <div class="container">
  <div class="form-row">

    <div class="form-group col-sm-8"> 
      <label >Email</label>
      <input type="email" name="UName" class="form-control" > 
    </div>
 
    <div class="form-group col-sm-8">
      <label >Mot de passe</label>
      <input type="password" name="Password" class="form-control" >
    </div>
  </div>
  <button   name="Login" class="btn" style="background-color:black;color:white">Se Connecter</button>
  </div>
</form>
 
</div>

</body>


  
</body>


<!-- jQuery and JS bundle w/ Popper.js -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</html>