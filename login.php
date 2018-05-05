<?php
include 'conectaDB.php';
 ?>
 <!DOCTYPE html>
 <html>
 <head>
 <meta name="viewport" content="width=device-width, initial-scale=1">
 <link href="css/estilo.css" rel="stylesheet">

 </head>
 <body>
   <script type="text/javascript">
     function validaCampos(){
       var User = document.login.user.value;
       var Pass = document.login.pass.value;

       if (User == null || User.length == 0) {
         alert("Debe Introducir un Usuario de almenos 1 caracter.");
         document.login.user.focus();
         return false;
       }
       if(Pass == null || Pass.length == 0){
         alert("Debe Introducir Una Contraseña.");
         document.login.pass.focus();
         return false;
       }
       return false;
     }
   </script>
<h2><center>Café de Amaury :) </center></h2>
 <h2><center><span>Inicio de Sesión</span></center></h2>

 <form action="login_Valida.php" method="POST" onsubmit="return validaCampos()">
   <div class="imgcontainer">
     <img src="imagenes/img_avatar2.png" alt="Avatar" class="avatar">
   </div>

   <div class="container">
     <label for="uname"><b>Usuario</b></label>
     <input type="text" placeholder="Ingresa Usuario" name="user" id="user" required>

     <label for="psw"><b>Contraseña</b></label>
     <input type="password" placeholder="Ingresa Contraseña" name="pss" id="pss" required>

     <button type="submit">Iniciar Sesión</button>
     <br>
     <br>


   </div>

   <!-- <div class="container" style="background-color:#f1f1f1">
     <button type="button" class="cancelbtn">Cancel</button>
     <span class="psw">Forgot <a href="#">password?</a></span>
   </div> -->
 </form>
 <form action="usuarios.php">
   <button type="submit">Nuevo Usuario</button>
   <a href="../hotel-master/login.php">Ir a Hotel</a>
</form>

 </body>
 </html>
