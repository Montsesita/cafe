<?php
include 'conectaDB.php';


$NombreC = $_POST['NombreU'];
$usu = $_POST['user'];
$pss = $_POST['pss'];
$insertUsu = "INSERT INTO `usuarios` (`nombre`, `user`, `pass`) VALUES ('".$NombreC."', '".$usu."', '".$pss."')";
//echo $insertUsu;
$con->query($insertUsu);


echo "<script>alert('Se añadió exitosamente el Usuario.');</script>";
//echo "holii";
header('Location: login.php');
 ?>
