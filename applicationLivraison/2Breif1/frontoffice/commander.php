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
<?php 
    require_once '../classe/plat.php';
    $all = new Plat;
    $donnes = $all->select();
?>

<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
$result="";
if(isset($_POST['submit'])){
include '../frontoffice/phpmailer/PHPMailer.php';
require"../frontoffice/phpmailer/Exception.php";
require "../frontoffice/phpmailer/SMTP.php";


$mail = new PHPMailer();

    $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      // Enable verbose debug output
    $mail->isSMTP();                                            // Send using SMTP
    $mail->Host       = 'smtp.example.com';                    // Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
    $mail->Username   = 'bouchraelaili247@gmail.com';                     // SMTP username
    $mail->Password   = 'brw147258';                               // SMTP password
    $mail->SMTPSecure = 'tls';         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
    $mail->Port       = 587;                                    // TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above

    //Recipients
    $mail->setFrom($_POST['email'],$_POST['Prénom']);
    $mail->addAddress('bouchraelaili@gmail.com');     // Add a recipient
    $mail->addReplyTo($_POST['email'],$_POST['Prénom']);
    $mail->Subject = 'Test sending mail';

    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Body    = '<h1>Nom:'.$_POST['Prénom'];
    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    
    if(!$mail->send()){
      $result="no";
    }
    else{
      $result="merci";
    }

}
?>
<center><p class="parg1">Merci de remplir ce formulaire</p></center>
<form action="commander.php" method="post">
<div class="container">
  <div class="form-row">
    <p><?= $result; ?></p>
    <div class="form-group col-md-6">
      <label for="inputEmail4">Prénom</label>
      <input type="text" name="Prénom" class="form-control" id="inputEmail4">
    </div>
    <div class="form-group col-md-6">
      <label for="inputPassword4">email</label>
      <input type="email" name="email" class="form-control" id="inputPassword4">
    </div>
  </div>
  <div class="form-group">
    <label for="inputAddress">Numéro télephone</label>
    <input type="text" name="numéro" class="form-control" id="inputAddress" >
  </div>
  <div class="form-group">
    <label for="inputAddress2">Addresse</label>
    <input type="text" name="subject" class="form-control" id="inputAddress2" >
  </div>
  <!-- <input type="text" name="titrematch" class="field-style field-split align-left" placeholder="Titre Du match" /> -->
  <div class="form-group">
    <select type="text" name="idplat" class="form-control">
        <?php
            foreach ($donnes as $dn)
            {
        ?>
        <option value="<?php echo $dn->id ?>"><?php echo $dn->nom ?></option>
        <?php
            }
        ?>
    </select>
    </div>
  <button name="submit" class="btn" style="background-color:black;color:white">Envoyer</button>
  </div>
</form>

<?php require('include/footer.php');?>

  
</body>


<!-- jQuery and JS bundle w/ Popper.js -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</html>