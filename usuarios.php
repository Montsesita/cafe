<link href="css/estilo.css" rel="stylesheet">
<form action="insertaUsuario.php" method="post">
<h1>Alta Usuarios</h1>
<hr>
<div>
    <label for="NombreU">Nombre Completo</label>
  <div>
  <input id="NombreU" name="NombreU" type="text" placeholder="Nombre Completo" required>
  </div>
</div>

<div>
  <label for="user">Usuario</label>
  <div>
  <input id="user" name="user" type="text" placeholder="Usuario" required>
  </div>
</div>

<div>
  <label for="pss">Contraseña</label>
  <div>
  <input id="pss" name="pss" type="text" placeholder="Contraseña" required>
  </div>
</div>
<div>
   <button id="guardar" type="submit">Agregar Usuario</button>
 </div>
</form>
