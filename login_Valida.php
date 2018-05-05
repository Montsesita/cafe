<?php
include 'conectaDB.php';
$Usuario = $_POST['user'];
$Passwd =  $_POST['pss'];
//echo "usuario: ".$Usuario;
//echo "<br>Pass: ".$Passwd;
if(isset($Usuario) and isset($Passwd)){
  //echo "Estoy en el if :D";
  session_start();
  $consulta = "SELECT NombreC FROM usuarios WHERE usuario LIKE '".$Usuario."' AND pass LIKE '".$Passwd."'";
  if ($resultado = mysqli_query($con, $consulta)) {
      $fila = mysqli_fetch_row($resultado);
      if (isset($fila[0])) {
        $_SESSION['NombreUsu'] = $fila[0];
        header('Location: index.php');
      } else {
        header('Location: login.php');
      }


  }
}

?>
