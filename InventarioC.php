<link href="css/estilo.css" rel="stylesheet">
<h1> Inventario </h1>

<table >
  <thead>
    <tr>
      <th># de Inventario</th>
      <th>Existencia</th>
      <th>Producto</th>
      <th>Fecha de Caducidad</th>
    </tr>
  </thead>
  <tbody>
<?php
include 'conectaDB.php';
$consulta = "SELECT i.idinventario, i.cantidad, i.idproducto,p.descripcion,i.fecCad FROM inventario i, productos p WHERE i.idproducto = p.idproducto";
if ($resultado = mysqli_query($con, $consulta)) {
    while ($fila = mysqli_fetch_row($resultado)) {
      $IdInventario = $fila[0];
      $Cantidad = $fila[1];
      $IdProducto = $fila[2];
      $Producto = $fila[3];
      $FecCad = $fila[4];

    echo "<tr><td><center>".$IdInventario."</center></td><td><center>".$Cantidad."</center></td><td><center>".$Producto."</center></td><td><center>".$FecCad."</center></td></tr>";
    }
}
?>
  </tbody>
</table>
<br>
<br>
<br>
<form action="insertaInventario.php" method="get">
<h1> Alta de Productos en Inventario </h1>

<div>
  <label for="producto">Producto</label>
  <div>
    <select id="producto" name="producto">
      <option value="">Seleccione una Producto</option>
      <?php
      $consulta = "SELECT idproducto, descripcion FROM productos";
      if ($resultado = mysqli_query($con, $consulta)) {
          while ($fila = mysqli_fetch_row($resultado)) {
            $idproducto = $fila[0];
            $descripcion = $fila[1];
          echo "<option value='".$idproducto."'>".$descripcion."</option>";
          }
      }

       ?>

    </select>
  </div>
</div>
    <label for="cantidad">Cantidad</label>
  <div>
  <input id="cantidad" name="cantidad" type="text" placeholder="Cantidad">
  </div>
</div>
<div>
    <label for="fecCad">Fecha de Caducidad</label>
  <div>
  <input id="fecCad" name="fecCad" type="text" placeholder="Fecha de Caducidad">
  </div>
</div>


<div>
   <button id="guardar" type="submit">Guardar</button>
 </div>
</form>
