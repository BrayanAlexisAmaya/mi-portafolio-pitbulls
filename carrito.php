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
          <nav id="nave">
            <span style="color: #358ea0;">/</span>&nbsp;&nbsp;<button><a href="<?php if(isset($_SESSION["id"])){ echo "principalusu.php"; } else{ echo "principal.php"; } ?>" style="color: red">inicio</a></button>&nbsp;&nbsp;
            <span style="color: #358ea0;">/</span>&nbsp;&nbsp;<button><a href="<?php if(isset($_SESSION["id"])){ echo "infousu.php"; } else{ echo "info.php"; } ?>">¿De que trata?</a></button>&nbsp;&nbsp;
            <span style="color: #358ea0;">/</span>&nbsp;&nbsp;<button><a href="<?php if(isset($_SESSION["id"])){ echo "contacusu.php"; } else{ echo "contac.php"; } ?>">Contactanos</a></button>&nbsp;&nbsp;
            <?php if(isset($_SESSION["tipo"])){if($_SESSION["tipo"] == "super usuario" or $_SESSION["tipo"] == "administrador" or $_SESSION["tipo"] == "diseñador"){ echo "<span style='color: #358ea0;'>/</span>&nbsp;&nbsp;<button><a href='registrarprodu.php'>Registrar Productos</a></button>&nbsp;&nbsp;";}} ?>
            <?php if(isset($_SESSION["id"])){ echo "<span style='color: #358ea0;'>/</span>&nbsp;&nbsp;<span class='opcion'><button>";} if(isset($_SESSION["nombre"])){echo $_SESSION["nombre"];}?></button></span>
            <span style="color: #358ea0;">/</span>&nbsp;&nbsp;<button><a href="cerrar.php">Cerrar Sesion</a></button>&nbsp;&nbsp;
            <span style="color: #358ea0;">/</span>
          </nav>
        </div>
<!-- se termina la divicion para el navegador -->
<!-- se crean las diviciones para el navegador para los productos -->
        <div class="productos">
          <nav>
          <div id="contenedor">
            </div>
            <?php
           echo procarro();
            ?>
            <div class="error">
              <?php
                include "iniciarsesion.php";
              ?>
            </div>
            <div>
              <?php
              // echo "<span style='color: rgb(212, 212, 212);; position: absolute; bottom: -65%; left: 210px;'>('Este es un anuncio de prueba')</span>";
              // echo anuncio();
              ?>
            </div>
          </nav>
        </div>   
        </div> 
    </body>
</html>