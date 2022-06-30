<!DOCTYPE html>
<html>
    <head>
      <link rel="stylesheet" href="pitbulls.css" type="text/css">
      <link rel="stylesheet" href="java.css" type="text/css">
      <meta charset="utf-8">
      <link rel="shorcut icon" href="logo/logofa.png" type="image/png">
      <title>Pitbulls</title>
    </head>
    <body>
<!-- se inicia la sesion, se inclulle la conexion y las funciones javascript -->      
      <?php
       session_start();
       include_once "conexion.php"; 
       include "funcionesjava.php";
       include "funcionespagina.php"; 
      ?>
<!-- se crean las diviciones para el titulo y sobre que trata la pagina -->
      <header>
      <div style="position: relative;">
        <div class="nombre"><button class="nombreb"><strong>&nbsp;&nbsp;PITBULLS&nbsp;&nbsp;</strong></button></div>
        <div class="servicio"><p>Filtro de paginas web.</p></div>
        <div class="logo"><img src="logo/pitbulls.png"></div>
<!-- se termina la divicion del titulo y sobre que trata la pagina -->
<!-- se crean las diviciones para el navegador -->
        <div class="navegador">
          <nav>
            <span style="color: #358ea0;">/</span>&nbsp;&nbsp;<button><a href="principal.php">inicio</a></button>&nbsp;&nbsp;
            <span style="color: #358ea0;">/</span>&nbsp;&nbsp;<button><a href="info.php">¿De que trata?</a></button>&nbsp;&nbsp;
            <span style="color: #358ea0;">/</span>&nbsp;&nbsp;<button><a style="color: red" href="contac.php">Contactanos</a></button>&nbsp;&nbsp;
            <span style="color: #358ea0;">/</span>&nbsp;&nbsp;<button><a href="carrito.php">carrito</a></button>&nbsp;&nbsp;
            <span style="color: #358ea0;">/</span>&nbsp;&nbsp;<button onclick="iniciar();">Iniciar Sesion</button>&nbsp;&nbsp;
            <span style="color: #358ea0;">/</span>&nbsp;&nbsp;<button onclick="registrar();">Registrarse</button>&nbsp;&nbsp;
            <span style="color: #358ea0;">/</span>
          </nav>
        </div>
<!-- se termina la divicion para el navegador -->
<!-- se crean las diviciones para el navegador para los productos -->
        <div class="productos" style="width: 1000px;">
          <nav style="color: rgb(211, 211, 211);">
          <span style="position: relative; left: -120px; color: whitesmoke; font-size: 25px;">
          <font color="red">Nuestras redes sociales:</font><br><br>
          <li><a href="https://www.instagram.com/pitbullssas/saved/" style="text-decoration: none; color: white;">Instagram</a></li>
          <li><a href="https://www.facebook.com/profile.php?id=100074693981603" style="text-decoration: none; color: white;">facebook</a></li>
          <li><a href="https://twitter.com/pitbull52255471" style="text-decoration: none; color: white;">Twitter</a></li><br>
          <font color="red">Ayuda:</font><br><br>
          <nav style="position: relativel; left: -120px;" class="primero">
          <li style="list-style: none;" class="olvi"><button class="olvip">¿Olvidaste tu contraseña?</button>
          <nav class="olvicontra">
            <br><font color="red">Si olvidaste tu contraseña realiza los siguientes pasos:</font><br><br>
            <li style="color: whitesmoke; list-style: none;">1. Presiona el boton de iniciar sesion:<br><br>
            <img src="contactanos/iniciosesion_olvi.jpg" id="imagencontac"> 
           </li><br>
           <li style="color: whitesmoke; list-style: none;">2. Presiona <strong>¿Olvidaste la contraseña?:</strong><br><br>
           <img src="contactanos/olvicontra_olvi.jpg" id="imagencontac">
          </li>
          </nav><br></li>
          <li style="list-style: none;"></li> 
          <li style="list-style: none;"></li>
         </nav></span><br>
             <span style="position: relative; left: 130px; color: black; font-size: 80px; background: white; border-radius: 20px; border: 5px solid #358ea0 ">
             !PROXIMAMENTE!
             </span><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
             <div id="contenedor">
            </div>
            <div class="error">
              <?php
                include "iniciarsesion.php";
              ?>
            </div>
            <div style="position: relative;">
              <?php
              echo "<span style='color: rgb(212, 212, 212);; position: absolute; bottom: -65%; left: 210px;'>('Este es un anuncio de prueba')</span>";
              echo anuncio();
              ?>
            </div>
          </nav>
        </div>   
        </div> 
    </body>
</html>