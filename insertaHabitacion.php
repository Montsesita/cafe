<?php
include 'conectaDB.php';
$nombre = $_GET['Nombre'];
$numero = $_GET['numero'];
$piso = $_GET['piso'];
$perXhab=$_GET['perXhab'];
$insertHuesped = "INSERT INTO `habitaciones` (`Nombre`, `numero`, `piso`, `num_pers`, `estatus`) VALUES ('".$nombre."', '".$numero."', '".$piso."', '".$perXhab."', '1')";
$con->query($insertHuesped);

echo "<script>alert('Se añadió exitosamente la Habitación.');</script>";

header('Location: habitaciones.php');
 ?>
