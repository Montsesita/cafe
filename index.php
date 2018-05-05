<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Amaury's  Hotel</title>
  <link href="css/estilo.css" rel="stylesheet">
</head>

<body>

  <center><img src="imagenes/banner.png" alt=""></center>
  <center>
    <div>
      <ul id="menu">
        <li >
          <a  href="ConsultaReservaciones.php" target="i_contenido">Inicio</a>
        </li>
        <li>
          <a href="ConsultaReservaciones.php" target="i_contenido">Registro</a>
        </li>
        <li>
          <a href="huespedes.php" target="i_contenido">Huespedes</a>
        </li>
        <li>
          <a href="habitaciones.php" target="i_contenido">Habitaciones</a>
        </li>
        <li>
          <a href="#">Bienvenido: <?php session_start(); echo $_SESSION['NombreUsu']; ?></a>
        </li>
        <li>
          <a href="login.php"><?php session_destroy(); ?>Cerrar Sesión</a>
        </li>
      </ul>
    </div>
  </center>
  <div class="container">
    <div>
      <h1>Amaury's Hotel System</h1>
      <hr>
      <!-- Abro php para conocer la fecha actual -->
      <?php
      $hoy = getdate();
      $fecha= $hoy['month']." ".$hoy['mday'].", ".$hoy['year']." ".$hoy['hours'].":".$hoy['minutes'];
      echo "<p>".$fecha."</p>";
      ?>
      <hr>
    </div>
    <iframe src="ConsultaReservaciones.php" width="100%" height="1000px" name="i_contenido"></iframe>
  </div>

  <footer>
    <div class="container">
      <p class="m-0 text-center text-white">Copyright &copy; Montsesitap Caballé 2018</p>
    </div>
  </footer>
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>
