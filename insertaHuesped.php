<?php
include 'conectaDB.php';
$nombre = $_GET['NombreC'];
$tel = $_GET['telefono'];
$IdHabitacion = $_GET['habitacion'];
$perXhab=$_GET['perXhab'];
$insertHuesped = "INSERT INTO `huespedes` (`NombreC`, `telefono`, `estatus`) VALUES ('".$nombre."', '".$tel."', '1')";
$con->query($insertHuesped);

$consulta = "SELECT last_insert_id()";
$resultado = mysqli_query($con, $consulta);
$fila = mysqli_fetch_row($resultado);
$IdHuesped = $fila[0];
$fecha = date("aaaa-mm-dd hh:mm:ss");
$insertReservacion = "INSERT INTO `registro` (`idhabitacion`, `idhuesped`, `fecha_entrada`, `pXh`) VALUES (".$IdHabitacion.", ".$IdHuesped.", CURDATE(), '1')";
$con->query($insertReservacion);
$updateHabitacion = "UPDATE `habitaciones` SET `estatus`='2' WHERE `idhabitacion`=".$IdHabitacion;
$con->query($updateHabitacion);
echo "<script>alert('Se añadió exitosamente la Reservación.');</script>";

header('Location: ConsultaReservaciones.php');
 ?>
