<link href="css/estilo.css" rel="stylesheet">

<form action="insertaHabitacion.php" method="get">
<h1> Registro de Habitaciones </h1>

<div >
  <label for="NombreC">Nombre</label>
  <div>
  <input id="Nombre" name="Nombre" type="text" placeholder="Nombre Habitación">
  </div>
</div>
<div>
    <label for="telefono">Número</label>
  <div>
  <input id="numero" name="numero" type="text" placeholder="Número">
  </div>
</div>
<div>
    <label for="perXhab">Personas X Habitación</label>
  <div>
  <input id="perXhab" name="perXhab" type="text" placeholder="Personas por
Habitación.">
  </div>
</div>

<div>
  <label for="piso">Piso</label>
  <div>
    <select id="piso" name="piso">
      <option value="">Seleccione un piso</option>
      <option value="1">1</option>
      <option value="2">2</option>  

    </select>
  </div>
</div>
<div>
   <button id="guardar" type="submit">Guardar</button>
 </div>
</form>


<hr>
<h1> Registro de Habitaciones Activos</h1>
<table border="1">
  <thead>
    <tr>
      <th>Nombre Completo</th>
      <th>Personas X Habitación</th>
    </tr>
  </thead>
  <tbody>
<?php
include 'conectaDB.php';
$consulta = "SELECT idhabitacion, Nombre, num_pers FROM habitaciones WHERE estatus =1";
if ($resultado = mysqli_query($con, $consulta)) {
    while ($fila = mysqli_fetch_row($resultado)) {
      $IdHabitacion = $fila[0];
      $Nombre = $fila[1];
      $persXhab = $fila[2];
      echo "<tr><td>".$Nombre."</td><td>".$persXhab."</td></tr>";
    }
}
?>
  </tbody>
</table>
<hr>
<h1> Registro de Habitaciones Inactivos</h1>
<table border="1">
  <thead>
    <tr>
      <th>Nombre Completo</th>
      <th>Personas X Habitación</th>
    </tr>
  </thead>
  <tbody>
<?php
include 'conectaDB.php';
$consulta = "SELECT idhabitacion, Nombre, num_pers FROM habitaciones WHERE estatus = 2";
if ($resultado = mysqli_query($con, $consulta)) {
    while ($fila = mysqli_fetch_row($resultado)) {
      $IdHabitacion = $fila[0];
      $Nombre = $fila[1];
      $persXhab = $fila[2];
      echo "<tr><td>".$Nombre."</td><td>".$persXhab."</td></tr>";
    }
}
?>
</tbody>
</table>
