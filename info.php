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
            <span style="color: #358ea0;">/</span>&nbsp;&nbsp;<button><a href="info.php" style="color: red">¿De que trata?</a></button>&nbsp;&nbsp;
            <span style="color: #358ea0;">/</span>&nbsp;&nbsp;<button><a href="contac.php">Contactanos</a></button>&nbsp;&nbsp;
            <span style="color: #358ea0;">/</span>&nbsp;&nbsp;<button><a href="carrito.php">carrito</a></button>&nbsp;&nbsp;
            <span style="color: #358ea0;">/</span>&nbsp;&nbsp;<button onclick="iniciar();">Iniciar Sesion</button>&nbsp;&nbsp;
            <span style="color: #358ea0;">/</span>&nbsp;&nbsp;<button onclick="registrar();">Registrarse</button>&nbsp;&nbsp;
            <span style="color: #358ea0;">/</span>
          </nav>
        </div>
<!-- se termina la divicion para el navegador -->
<!-- se crean las diviciones para el navegador para los productos -->
        <div class="productos" style="width: 1000px;">
          <nav>
             <span style="position: relative; left: -120px; color: rgb(211, 211, 211); font-size: 25px;">
             <font color="red">¿Que es pitbulls?</font><br><br>
             Pitbulls es una pagina web desarrollada para solucionar el problema de las estafas y los precios infados
             de las paginas web hoy en día.<BR><br>
             Pitbulls es un filtro de paginas web, el cual se encarga de agrupar las mejores tiendas online, 
             con mejor seguridad, precios estables y honestos.<br><br>
             La idea de pitbulls surgio porque segun las estisticas y estudios realizados el 60% de los casos
             reportados de estafa 
             son en paginas web, ya que la gente no sabe cuales son seguras y de confianza, porque no estan 
             bien informados sobre el tema ni tienen una buena asesoria.<br><br>
             Ahi es donde entra pitbulls, pitbulls le ahorra el tedioso trabajo de investigar que paginas web
             son seguras y confiables, ademas tambien ayuda a encontrar las paginas web
             donde el producto que buscas tiene el precio mas acequible para tu bolsillo, lo que permite a los 
             usuarios tener mas tiempo para comprar dentro de la pagina, sin miedo a estafas.<Br><br>
             ¡PITBULLS PROTEGE TU BOLSILLO!
             <br><br><br><font color="red">¿Cual es su funcionamiento?</font><br><br>
             Pitbulls funciona con el lenguaje de etiquetas de hipertexto "HTML", comprementandolo con hojas de estilo "CSS",
             tambien usa el lenguaje de programacion "PHP", usando "PDO" para realizar la conexion con la base de datos, y 
             tambien "JAVASCRIPT", para poder realizar las animaciones de las tablas de inicio de sesion y registro.<br><br>
             Los productos se muestran a travéz de un "FOR" en "PHP", usando funciones "PDO" para llamar las imagenes e informacion 
             de los productos para poder mostrarlas en la pagina.<br><br>
             Las categorias de la pagina principal se muestran atravez de funciones en php donde se realizan consultas con "PDO" 
             a la base de datos y con un "RAND" en "SQL" se logra que las imagenes y anuncios cambien de forma aleatorea cada vez que
             se recarge la pagina.
             <br><br><br><br><br><br><br><br><br><br></span>
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