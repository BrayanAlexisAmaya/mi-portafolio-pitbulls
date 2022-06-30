<!DOCTYPE html>
<html>
    <head>
    <link rel="stylesheet" href="java.css" type="text/css">
    </head>
    <body>
        <!-- funciones para el inicio de sesion -->
        <script>
            function mostrar(){
                var contraini = document.getElementById("textin");
                if( contraini.type == "password"){
                    contraini.type = "text";
                }
                else{
                    contraini.type = "password";
                }
            }
            function ocultarini(){
                var imagenini = document.getElementById("mostrarin");
                var contraini = document.getElementById("textin");
                if( contraini.type == "password"){
                    imagenini.src = "logo/mostrar.png";
                }
                else{
                    imagenini.src = "logo/ocultar.png";
                }
            }
            function iniciar(){
                var contenedor = document.getElementById("contenedor");
                contenedor.innerHTML = "<table class='t' align='center'><tr class='tr'><th><button onclick='none'>&nbsp;Pitbulls&nbsp;</button></th></tr><tr><th><span style='color: black;'>/ Iniciar Sesion /</span></th></tr><tr class='tr1'><td><div><form method='POST' autocomplete='off'  align='center'><button class='mostrarin'></button><input type='text' name='usuario' placeholder='escriba su nombre de usuario' align='center' class='textin' required><button class='mostrarin'></button><br><button class='mostrarin'></button><input type='password' name='clave' placeholder='ingrese su contraseña' align='center' id='textin' class='textin' required><button type='button' class='mostrar' name='ojoini' onclick='mostrar();ocultarini();'><img src='logo/mostrar.png' alt='ver' align='absmiddle'  id='mostrarin' style='border: none;'></button><br><button onclick='olvidaste();' class='olvidaste' type='button'>¿Olvidaste la contraseña?</button><br><input type='submit' class='iniciar' name='iniciar' value='iniciar'>&nbsp;<input type='reset' class='iniciar'><br>&nbsp;</form></div></td></tr></table>";
            }
        </script>
        <!--funciones para registrarse -->
        <script>
            function mclavev(){
                var clave = document.getElementById("cveri");
                if(clave.type == "password"){
                    clave.type = "text";
                }
                else{
                    clave.type = "password";
                }
            }
            function verclavi(){
                var clave = document.getElementById("cveri");
                var img = document.getElementById("vcveri");
                if(clave.type == "password"){
                    img.src = "logo/mostrar.png";
                }
                else{
                    img.src = "logo/ocultar.png";
                }
            }
            function registrar(){
                var contenedor = document.getElementById("contenedor");
                contenedor.innerHTML = "<table class='t' align='center'><tr class='tr'><th><button onclick='none'>&nbsp;Pitbulls&nbsp;</button></th></tr><tr><th><span style='color: black;'>/ Registrarse /</span></th></tr><tr class='tr1'><td><div class='registrar'><form method='POST' autocomplete='off'  align='center'><button class='mostrarin'></button><input type='text' name='nombre' placeholder='ingrese su nombre completo' align='center' class='textin' required><button class='mostrarin'></button><br><button class='mostrarin'></button><input type='text' name='apellido' placeholder='ingrese su apellido' align='center' class='textin' required><button class='mostrarin'></button><br><button class='mostrarin'></button><input type='text' name='username' placeholder='ingrese su usuario' align='center' class='textin' required><button class='mostrarin'></button><br><button class='mostrarin'></button><input type='text' name='correo' placeholder='ingrese su correo' align='center' class='textin' required><button class='mostrarin'></button><br><button class='mostrarin'></button><input type='number' name='telefono' placeholder='ingrese su telefono' align='center' class='textin' required><button class='mostrarin'></button><br><button class='mostrarin'></button><input type='password' name='clavere' placeholder='ingrese una contraseña' align='center' id='textin' class='textin' required><button type='button' class='mostrar' onclick='mostrar();ocultarini();'><img src='logo/mostrar.png' alt='ver' align='absmiddle' id='mostrarin' style='border: none;'></button><br><button class='mostrarin'></button><input type='password' name='claveveri' id='cveri' class='textin' placeholder='verifique su contraseña' required><button type='button' class='mostrarin' onclick='mclavev();verclavi();'><img src='logo/mostrar.png' alt='ver' id='vcveri' class='mostrarin' align='absmiddle' style='border: none;'></button><br><br><input type='submit' class='iniciar' value='registrarse' name='registrar'><input type='reset'></form><br>&nbsp;</td></tr></table>"; 
            }
            function olvidaste(){
                var contenedor = document.getElementById("contenedor");
                contenedor.innerHTML = "<table class='t' align='center'><tr class='tr'><th><button onclick='none'>&nbsp;Pitbulls&nbsp;</button></th></tr><tr><th><span style='color: black;'>/ Recuperar cuenta /</span></th></tr><tr class='tr1'><td><div><form method='POST' autocomplete='off'  align='center'><button class='mostrarin'></button><input type='text' name='usuario' placeholder='escriba su nombre de usuario' align='center' class='textin' required><button class='mostrarin'></button><br><button class='mostrarin'></button><input type='text' style='position: relative; left: -17px;' name='correo' placeholder='ingrese su correo electronico' align='center' id='textin' class='textin' required><button type='button'></button><br><input type='submit' class='iniciar' name='recuperar' value='recuperar'>&nbsp;<input type='reset' class='iniciar'><br>&nbsp;</form></div></td></tr></table>";
            }
            function carrito(){
                var contenedor = document.getElementById("produ");
                contenedor.innerHTML = "<?php 
                if(isset($_SESSION["nombre"])){
                $idu = $_SESSION["id"];
                $carrito = conexion::base()->prepare("INSERT INTO `usu_pro`(`id_usu`,`id_produ`) VALUES ('$id','$idu')");
                // if($carrito->execute()){
                    echo "<button class='ero'><strong>&nbsp;Agregado al carrito correctamente&nbsp;</strong></button>";
                
            }
            else{
                echo "<button class='ero'><strong>&nbsp;Por favor inicie sesion primero&nbsp;</strong></button>";
            }
                 ?>";
            }
        </script>
    <body>
</html>