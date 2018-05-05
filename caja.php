<link href="css/estilo.css" rel="stylesheet">
<form action="insertaVenta.php" method="post">
<h1> Caja de Venta</h1>
<hr>
<div>
    <label for="fec">Fecha de Venta</label>
  <div>
  <input id="fec" name="fec" type="text" placeholder="Fecha de Venta">
  </div>
</div>

<div>
  <label for="caja">Caja</label>
  <div>
    <select id="caja" name="caja">
      <option value="">Seleccione una Caja</option>
      <?php
      include 'conectaDB.php';
      $consulta = "SELECT idcaja, nombre, idusuario FROM caja";
      if ($resultado = mysqli_query($con, $consulta)) {
          while ($fila = mysqli_fetch_row($resultado)) {
            $idcaja = $fila[0];
            $NombreCaja = $fila[1];
          echo "<option value='".$idcaja."'>".$NombreCaja."</option>";
          }
      }

       ?>

    </select>
  </div>
</div>

<div>
  <label for="producto">Producto</label>
  <div>
    <select id="producto" name="producto">
      <option value="">Seleccione un Producto</option>
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
   <button id="guardar" type="submit">Cobrar</button>
 </div>
</form>
