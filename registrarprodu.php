<!DOCTYPE html>
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
       include "funcionesadmina.php";
       include "funcionespagina.php"; 
      ?>
<!-- se crean las diviciones para el titulo y sobre que trata la pagina -->
      <header>
      <div style="position: relative;">
        <div class="nombre"><button class="nombreb"><strong><a href="<?php if(isset($_SESSION["id"])){ echo "principalusu.php"; } else{ echo "principal.php"; } ?>" style="text-decoration: none; color: black;">&nbsp;&nbsp;PITBULLS&nbsp;&nbsp;</a></strong></button></div>
        <div class="servicio"><p>Pagina administrador.</p></div>
        <div class="logo"><img src="logo/pitbulls.png"></div>
<!-- se termina la divicion del titulo y sobre que trata la pagina -->
<!-- se crean las diviciones para el navegador -->
        <div class="navegador">
          <nav id="nave">
            <span style="color: #358ea0;">/</span>&nbsp;&nbsp;<button onclick="maquillaje();">Maquillaje</button>&nbsp;&nbsp;
            <span style="color: #358ea0;">/</span>&nbsp;&nbsp;<button onclick="figuras();">Figuras</button>&nbsp;&nbsp;
            <span style="color: #358ea0;">/</span>&nbsp;&nbsp;<button onclick="tecnologia();">Tecnologia</button>&nbsp;&nbsp;
            <span style="color: #358ea0;">/</span>&nbsp;&nbsp;<button onclick="mangas();">Mangas</button>&nbsp;&nbsp;
            <span style="color: #358ea0;">/</span>&nbsp;&nbsp;<button onclick="deportes();">Deportes</button>&nbsp;&nbsp;
            <span style="color: #358ea0;">/</span>&nbsp;&nbsp;<button onclick="anuncios();">Anuncios</button>&nbsp;&nbsp;
            <span style="color: #358ea0;">/</span>&nbsp;&nbsp;<span class="opcion"><button><?php echo $_SESSION["nombre"]; ?></button>
            <span class="opcion2">
              <li><span><?php if(isset($_SESSION["tipo"])){if($_SESSION["tipo"] == "super usuario" or $_SESSION["tipo"] == "administrador" or $_SESSION["tipo"] == "diseñador"){ echo "Informacion ".$_SESSION["tipo"];}}
              else{ echo "Informacion de usuario";} ?></span><br><?php if(isset($_SESSION["tipo"])){if($_SESSION["tipo"] == "super usuario" or $_SESSION["tipo"] == "administrador" or $_SESSION["tipo"] == "diseñador"){
                echo "";}}
                else{ echo "<table>
                <tr class='tr'>
                  <th><button onclick='none'>&nbsp;Pitbulls&nbsp;</button></th>
                </tr>
                <tr>
                  <th><span style='color: black;'>/ Informacion /</span></th>
                </tr>
                <tr class='tr1'>
                  <td><div class='registrar'>
                    <form method='POST' align='center'>
                      <button class='mostrarin'></button>
                      <input type='text' name='nombreus' value='".$_SESSION["nombre"]."' align='center' class='textin' required>
                      <button class='mostrarin'></button>
                      <br><button class='mostrarin'>
                      </button>
                      <input type='text' name='apellidous' value='".$_SESSION["apellido"]."' align='center' class='textin' required>
                      <button class='mostrarin'></button>
                      <br>
                      <button class='mostrarin'></button>
                      <input type='text' name='usernameus' value='".$_SESSION["usuario"]."' align='center' class='textin' required>
                      <button class='mostrarin'></button><br><button class='mostrarin'></button>
                      <input type='text' name='correous' value='".$_SESSION["correo"]."' align='center' class='textin' required>
                      <button class='mostrarin'></button><br><button class='mostrarin'></button>
                      <input type='number' name='telefonous' value='".$_SESSION["telefono"]."' align='center' class='textin' required>
                      <button class='mostrarin'></button><br>
                      <button class='mostrarin'></button>
                      <input type='password' name='claveus' id='cveri' class='textin' placeholder='ingrese su contraseña' required>
                      <button type='button' class='mostrarin' onclick='mclavev();verclavi();'><img src='logo/mostrar.png' alt='ver' id='vcveri' class='mostrarin' align='absmiddle' style='border: none;'></button><br><a>Por favor cierre sesion despues de actualizar</a><br>
                     <input type='submit' class='iniciar' value='actualizar' name='actualizar'>
                     <input type='reset'>
                    </form><br>&nbsp;
                  </td>
                </tr>
              </table>";}?>
              </li>
            </span></span>&nbsp;&nbsp;
            <span style="color: #358ea0;">/</span>&nbsp;&nbsp;<button><a href="cerrar.php">Cerrar Sesion</a></button>&nbsp;&nbsp;
            <span style="color: #358ea0;">/</span>
          </nav>
        </div>
<!-- se termina la divicion para el navegador -->
<!-- se crean las diviciones para el navegador para los productos -->
        <div class="productos">
          <nav>
          <div id="contenedor" style="position: absolute; left: -75px;">
            </div>
            <?php
             echo principalusu();
            ?>
            <div class="error">
              <?php
                include "iniciarsesion.php";
              ?>
            </div>
            <div>
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
<br><br>
<br><br> 
<br><br>
</body>
</html>