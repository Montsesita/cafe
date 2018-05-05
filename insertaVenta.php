<?php
include 'conectaDB.php';
$producto = $_POST['producto'];
$cantidad = $_POST['cantidad'];
$fecVenta = $_POST['fec'];
$caja = $_POST['caja'];

$consultaC = "SELECT idusuario FROM caja WHERE idcaja = ".$caja;
if ($resultadoC = mysqli_query($con, $consultaC)) {
    $filaC = mysqli_fetch_row($resultadoC);
    $idusuario = $filaC[0];
}

$consulta = "SELECT costo FROM productos WHERE idproducto = ".$producto;
if ($resultado = mysqli_query($con, $consulta)) {
    $fila = mysqli_fetch_row($resultado);
    $costo = $fila[0];
}


$cantInventrio = "Select cantidad, idinventario from inventario where idproducto = ".$producto;
if ($resultadoI = mysqli_query($con, $cantInventrio)) {
    $filaI = mysqli_fetch_row($resultadoI);
    $cantidadI = $filaI[0];
    $IdInventario = $filaI[1];
}

if ($cantidadI < $cantidad) {
    echo "<scrip>alert('La cantidad en Inventario es insufieciente.');</script>";
    header('Location: caja.php');
}elseif($cantidadI == $cantidad){
  $subT = $costo * $cantidad;
  $insertVenta = "INSERT INTO `ventas` (`fecha`, `idcaja`, `idusuario`, `idproducto`, `cantidad`, `total`) VALUES ('".$fecVenta."', ".$caja.", ".$idusuario.", ".$producto.", ".$cantidad.", ".$subT.")";
  echo $insertVenta;
  $con->query($insertVenta);
  $totInv = $cantidadI - $cantidad;
  $updateInv = "UPDATE `inventario` SET `cantidad`=".$totInv." WHERE `idinventario`=".$IdInventario;
  $con->query($updateInv);
  header('Location: caja.php');
}else{
  $subT = $costo * $cantidad;
  $insertVenta = "INSERT INTO `ventas` (`fecha`, `idcaja`, `idusuario`, `idproducto`, `cantidad`, `total`) VALUES ('".$fecVenta."', ".$caja.", ".$idusuario.", ".$producto.", ".$cantidad.", ".$subT.")";
  $con->query($insertVenta);
  $totInv = $cantidadI - $cantidad;
  $updateInv = "UPDATE `inventario` SET `cantidad`=".$totInv." WHERE `idinventario`=".$IdInventario;
  $con->query($updateInv);
  header('Location: caja.php');
}

 ?>
