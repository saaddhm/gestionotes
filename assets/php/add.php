<?php

require_once 'config.php';


$nom=$_POST['nom'];
$prenom=$_POST['prenom'];
$classe=$_POST['classe'];
$sql="INSERT INTO students( nom, prenom, classe) 
VALUES('".$nom."','".$prenom."','".$classe."')";


$res=mysqli_query($db,$sql);

if ($res) {
    header('location:../../index.php');
}
else {
    echo "error";
}

?>