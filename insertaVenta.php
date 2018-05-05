<?php
include 'conectaDB.php';
$producto = $_GET['producto'];
$cantidad = $_GET['cantidad'];
$fecCad = $_GET['fecCad'];
$insertInventario = "INSERT INTO `inventario` (`cantidad`, `idproducto`, `fecCad`) VALUES ('".$cantidad."', '".$producto."', '".$fecCad."')";
$con->query($insertInventario);


echo "<script>alert('Se añadió exitosamente el Inventario.');</script>";

header('Location: InventarioC.php');
 ?>
