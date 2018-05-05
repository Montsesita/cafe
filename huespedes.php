<link href="css/estilo.css" rel="stylesheet">
<h1> Registro de Huespedes Activos</h1>
<table class="table table-striped" border="1">
  <thead>
    <tr>
      <th>Nombre Completo</th>
      <th>Teléfono</th>
    </tr>
  </thead>
  <tbody>
<?php
include 'conectaDB.php';
$consulta = "SELECT idhuesped, NombreC, telefono, estatus FROM huespedes where estatus = 1";
if ($resultado = mysqli_query($con, $consulta)) {
    while ($fila = mysqli_fetch_row($resultado)) {
      $IdHuesped = $fila[0];
      $NombreC = $fila[1];
      $telefono = $fila[2];
      $estatus = $fila[3];
      echo "<tr><td>".$NombreC."</td><td>".$telefono."</td></tr>";
    }
}
?>
  </tbody>
</table>
<hr>
<h1> Registro de Huespedes Inactivos</h1>
<table class="table table-striped" border="1">
  <thead>
    <tr>
      <th>Nombre Completo</th>
      <th>Teléfono</th>
    </tr>
  </thead>
  <tbody>
<?php
$consulta = "SELECT idhuesped, NombreC, telefono, estatus FROM huespedes where estatus = 0";
if ($resultado = mysqli_query($con, $consulta)) {
    while ($fila = mysqli_fetch_row($resultado)) {
      $IdHuesped = $fila[0];
      $NombreC = $fila[1];
      $telefono = $fila[2];
      $estatus = $fila[3];
      echo "<tr><td>".$NombreC."</td><td>".$telefono."</td></tr>";
    }
}
?>
