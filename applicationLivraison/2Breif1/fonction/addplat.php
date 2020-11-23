<?php
include '../classe/plat.php';
echo $nom = $_POST['nom'];
echo $image = $_FILES['image']['name'];
$upload="../frontoffice/img/".$image;
move_uploaded_file($_FILES['img']['tmp_name'],$upload);
echo $prix = $_POST['prix'];
echo $description = $_POST['Déscription'];
echo $id = $_POST['idplat'];
$new = new plat;
$new->insert($nom, $image, $prix, $description,$id);

header("location: ../backoffice/ajoutplat.php");