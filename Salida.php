<?php
include 'conectaDB.php';
$IdHabitacion = $_GET['IdHab'];
$IdHuesped = $_GET['IdHues'];

$salida = "UPDATE `registro` SET `fecha_salida`= CURDATE() WHERE `idhabitacion`=".$IdHabitacion." and`idhuesped`= ". $IdHuesped;
$con->query($salida);

$UpdateHab = "UPDATE `habitaciones` SET `estatus`='1' WHERE `idhabitacion`=".$IdHabitacion;
$con->query($UpdateHab);
$UpdateHuesp = "UPDATE `huespedes` SET `estatus`='0' WHERE `idhuesped`=".$IdHuesped;
$con->query($UpdateHuesp);
echo "<script>alert('Salida Exitosa');</script>";
header('Location: ConsultaReservaciones.php');
 ?>
