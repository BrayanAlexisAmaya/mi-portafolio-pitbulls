<?php
if(isset($_POST['registrar'])){
   $nombre = $_POST['nombre'];
   $apellido = $_POST['apellido'];
   $usuario = $_POST['username'];
   $correo = $_POST['correo'];
   $telefono = $_POST['telefono'];
   $clave = $_POST['clavere'];
   $verificacion = $_POST['claveveri'];
   if( $clave == $verificacion){
       $regis = conexion::base()->prepare("INSERT INTO `usuario`(`username`, `nombre`, `apellido`, `correo`, `telefono`, `password`) VALUES ('$usuario','$nombre','$apellido','$correo','$telefono','$clave')");
       if($regis->execute()){
           echo "<button class='ero'><strong>&nbsp;Usuario creado correctamente&nbsp;</strong></button>";
       }
      }
       else{
           echo "<button class='ero'><strong>&nbsp;Las contraseñas no son iguales&nbsp;</strong></button>";
       }
   }
   if(isset($_POST['actualizar'])){
    $user = $_SESSION["usuario"];
    $nombre = $_POST['nombreus'];
    $apellido = $_POST['apellidous'];
    $usuario = $_POST['usernameus'];
    $correo = $_POST['correous'];
    $telefono = $_POST['telefonous'];
    $clave = $_POST['claveus'];
    if( $clave == $_SESSION["clave"]){
        $actualizar = conexion::base()->prepare("UPDATE `usuario` SET `nombre`='$nombre',`apellido`='$apellido',`username`='$usuario',`correo`='$correo',`telefono`='$telefono' WHERE `username`='$user'");
        if($actualizar->execute()){
            echo "<button class='ero'><strong>&nbsp;Usuario actualizado correctamente&nbsp;</strong></button>";
        }
       }
        else{
            echo "<button class='ero'><strong>&nbsp;La contraseña es incorrecta&nbsp;</strong></button>";
        }
    }
    if(isset($_POST["envi"])){
        if(isset($_SESSION["tipo"])){
            if(isset($_SESSION["id"])){
            $consulta = conexion::base()->prepare("SELECT count(id_pro_admin) as ult From pro_admin");
            $consulta->execute();
            $ultimo = $consulta->fetch();
            $ulti = $ultimo["ult"] + 1;
            $idu = $_GET["idt"];
            $precio = conexion::base()->prepare("SELECT * From producto WHERE id='$idu'");
            $precio->execute();
            $pre = $_GET["pre"];
            $carrito = conexion::base()->prepare("INSERT INTO `pro_admin`(`id_pro`,`id_admin`,`id_pro_admin`,`total`) VALUES ('$idu','$id','$ulti','$pre')");
             if($carrito->execute()){
                echo "<button class='ero'><strong>&nbsp;Agregado al carrito correctamente".$pre."&nbsp;</strong></button>";
             }
        }
        else{
            echo "<button class='ero'><strong>&nbsp;Por favor inicie sesion primero&nbsp;</strong></button>";
        }
    }
    else{
        if(isset($_SESSION["id"])){
        $id = $_SESSION["id"];
        $consulta = conexion::base()->prepare("SELECT count(id_pro_usu) as ult From usu_pro where id_usu='$id'");
        $consulta->execute();
        $ultimo = $consulta->fetch();
        $ulti = $ultimo["ult"] + 1;
        $idu = $_GET["idt"];
        $pre = $_GET["pre"];
        $carrito = conexion::base()->prepare("INSERT INTO `usu_pro`(`id_usu`,`id_produ`,`id_pro_usu`,`total`) VALUES ('$id','$idu','$ulti','$pre')");
         if($carrito->execute()){
            echo "<button class='ero'><strong>&nbsp;Agregado al carrito correctamente&nbsp;</strong></button>";
    }
}
    else{
        echo "<button class='ero'><strong>&nbsp;Por favor inicie sesion primero&nbsp;</strong></button>";
    }
}
    }
  if(isset($_POST['iniciar'])){
      $usuario = $_POST['usuario'];
      $clave = $_POST['clave'];
      $iniciar = conexion::base()->prepare("SELECT * FROM usuario WHERE username='$usuario' AND password='$clave'");
      $iniciar->execute();
      $contador = $iniciar->rowCount();
      $fila = $iniciar->fetch();
      $iniciar1 = conexion::base()->prepare("SELECT * FROM admin WHERE nombre='$usuario' AND password='$clave'");
      $iniciar1->execute();
      $contador1 = $iniciar1->rowCount();
      $fila1 = $iniciar1->fetch();
      if($contador == 1 xor $contador1 == 1){
          if($contador == 1){
          $_SESSION["id"] = $fila["id"];
          $_SESSION["nombre"] = $fila["nombre"];
          $_SESSION["apellido"] = $fila["apellido"];
          $_SESSION["usuario"] = $fila["username"];
          $_SESSION["correo"] = $fila["correo"];
          $_SESSION["telefono"] = $fila["telefono"];
          $_SESSION["clave"] = $fila["password"];
          echo "<script> window.location = 'principalusu.php';</script>";
          }
          if($contador1 == 1){
          $_SESSION["id"] = $fila1["id"];
          $_SESSION["nombre"] = $fila1["nombre"];
          $_SESSION["tipo"] = $fila1["tipo"];
          echo "<script> window.location = 'registrarprodu.php';</script>";
          }
      }
      else{
           echo "<button class='ero'><strong>&nbsp;usuario o contraseña incorrectas&nbsp;</strong></button>";
      }
  }
  if(isset($_POST['registrarmaqui'])){
    $consulta = conexion::base()->prepare("SELECT count(id_maquillaje) as ultmaqui From producto where tipo='maquillaje'");
    $consulta->execute();
    $ult = $consulta->fetch();
    $ultm = $ult["ultmaqui"] + 1;
    $tipo = "maquillaje";  
    $nombre = $_POST['nombremaqui'];
    $src = $_POST['srcmaqui'];
    $precio = $_POST['preciomaqui'];
    $direccion = $_POST['direccionmaqui'];
    $descripcion = $_POST['descripcionmaqui'];
    $regismaqui = conexion::base()->prepare("INSERT INTO `producto`( `tipo`,`id_maquillaje`, `nombre_maqui`, `src_maqui`, `precio`, `descripcion`,`src`,`nombre`) VALUES ('$tipo','$ultm','$nombre','$src','$precio','$descripcion','$src','$nombre')");
    if($regismaqui->execute()){
        echo "<button class='ero'><strong>&nbsp;Maquillaje registrado correctamente&nbsp;</strong></button>";
    }
    else{
        echo "<button class='ero'><strong>&nbsp;no se ha podido registrar&nbsp;</strong></button>";
    }
  }
  if(isset($_POST['registrarfigu'])){
    $consulta = conexion::base()->prepare("SELECT count(id_figu) as ultmaqui From producto where tipo='figuras'");
    $consulta->execute();
    $ult = $consulta->fetch();
    $ultm = $ult["ultmaqui"] + 1;
    $tipo = "figuras";  
    $nombre = $_POST['nombrefigu'];
    $src = $_POST['srcfigu'];
    $precio = $_POST['preciofigu'];
    $direccion = $_POST['direccionfigu'];
    $descripcion = $_POST['descripcionfigu'];
    $regismaqui = conexion::base()->prepare("INSERT INTO `producto`( `tipo`, `id_figu`, `nombre_figu`, `src_figu`, `precio`, `descripcion`,`src`,`nombre`) VALUES ('$tipo','$ultm','$nombre','$src','$precio','$descripcion','$src','$nombre')");
    if($regismaqui->execute()){
        echo "<button class='ero'><strong>&nbsp;Figura registrada correctamente&nbsp;</strong></button>";
    }
    else{
        echo "<button class='ero'><strong>&nbsp;no se ha podido registrar&nbsp;</strong></button>";
    }
  }
  if(isset($_POST['registrarmanga'])){
    $consulta = conexion::base()->prepare("SELECT count(id_man) as ultmaqui From producto where tipo='mangas'");
    $consulta->execute();
    $ult = $consulta->fetch();
    $ultm = $ult["ultmaqui"] + 1;
    $tipo = "mangas";  
    $nombre = $_POST['nombremanga'];
    $src = $_POST['srcmanga'];
    $precio = $_POST['preciomanga'];
    $direccion = $_POST['direccionmanga'];
    $descripcion = $_POST['descripcionmanga'];
    $regismaqui = conexion::base()->prepare("INSERT INTO `producto`( `tipo`, `id_man`, `nombre_manga`, `src_manga`, `precio`, `descripcion`,`src`,`nombre`) VALUES ('$tipo','$ultm','$nombre','$src','$precio','$descripcion','$src','$nombre')");
    if($regismaqui->execute()){
        echo "<button class='ero'><strong>&nbsp;Manga registrado correctamente&nbsp;</strong></button>";
    }
    else{
        echo "<button class='ero'><strong>&nbsp;no se ha podido registrar&nbsp;</strong></button>";
    }
  }
  if(isset($_POST['registrartec'])){
    $consulta = conexion::base()->prepare("SELECT count(id_tec) as ultmaqui From producto where tipo='tecnologia'");
    $consulta->execute();
    $ult = $consulta->fetch();
    $ultm = $ult["ultmaqui"] + 1;
    $tipo = "tecnologia";  
    $nombre = $_POST['nombretec'];
    $src = $_POST['srctec'];
    $precio = $_POST['preciotec'];
    $direccion = $_POST['direcciontec'];
    $descripcion = $_POST['descripciontec'];
    $regismaqui = conexion::base()->prepare("INSERT INTO `producto`( `tipo`, `id_tec`, `nombre_tec`, `src_tec`, `precio`, `descripcion`,`src`,`nombre`) VALUES ('$tipo','$ultm','$nombre','$src','$precio','$descripcion','$src','$nombre')");
    if($regismaqui->execute()){
        echo "<button class='ero'><strong>&nbsp;tecnologia registrada correctamente&nbsp;</strong></button>";
    }
    else{
        echo "<button class='ero'><strong>&nbsp;no se ha podido registrar&nbsp;</strong></button>";
    }
  }
  if(isset($_POST['registrardep'])){
    $consulta = conexion::base()->prepare("SELECT count(id_deportes) as ultmaqui From producto where tipo='deportes'");
    $consulta->execute();
    $ult = $consulta->fetch();
    $ultm = $ult["ultmaqui"] + 1;
    $tipo = "deportes";  
    $nombre = $_POST['nombredep'];
    $src = $_POST['srcdep'];
    $precio = $_POST['preciodep'];
    $direccion = $_POST['direcciondep'];
    $descripcion = $_POST['descripciondep'];
    $regismaqui = conexion::base()->prepare("INSERT INTO `producto`( `tipo`, `id_deportes`, `nombre_deportes`, `src_deportes`, `precio`, `descripcion`,`src`,`nombre`) VALUES ('$tipo','$ultm','$nombre','$src','$precio','$descripcion','$src','$nombre')");
    if($regismaqui->execute()){
        echo "<button class='ero'><strong>&nbsp;deporte registrado correctamente&nbsp;</strong></button>";
    }
    else{
        echo "<button class='ero'><strong>&nbsp;no se ha podido registrar&nbsp;</strong></button>";
    }
  }
  if(isset($_POST['registraranun'])){
    $nombre = $_POST['nombreanun'];
    $src = $_POST['srcanun'];
    $empresa = $_POST['empresaanun'];
    $direccion = $_POST['direccionanun'];
    $regismaqui = conexion::base()->prepare("INSERT INTO `anuncios`(`src_anuncio`, `nombre_anuncio`, `empresa_anuncio`, `direccion_anuncio`) VALUES ('$src','$nombre','$empresa','$direccion')");
    if($regismaqui->execute()){
        echo "<button class='ero'><strong>&nbsp;anuncio registrado correctamente&nbsp;</strong></button>";
    }
    else{
        echo "<button class='ero'><strong>&nbsp;no se ha podido registrar&nbsp;</strong></button>";
    }
  }
  if(isset($_POST['recuperar'])){
    $usuario = $_POST["usuario"];
    $correo = $_POST["correo"];
    $recuperar = conexion::base()->prepare("SELECT correo,username,telefono from usuario where username='$usuario' and correo='$correo'");
    $recuperar->execute();
    $veri = $recuperar->rowCount();
    $datos = $recuperar->fetch();
    if($veri == 1){
        ini_set('SMTP','smtpout.secureserver.net');
        ini_set('smtp_port','25');
           $from = "Brayanama987@gmail.com";
           $to = $datos["correo"];
           $subject = "Recuperar contraseña";
           $message = "<html><head>
           <title>Recuperacion de cuenta</title>
           </head>
           <body>
           <h1>Se esta intentado recuperar la contraseña de tu cuenta PITBULLS</h1>
           <p>Si eres tu por favor confirma este correo</p>
           <form type='POST' autocomplete='off'>
           <input type='submit' name='si' value='si soy yo'>
           <input type='submit' name='no' value='no soy yo'>
           </form>
           </body>
           </html>";
           $headers = "From:".$from;
           mail($to, $subject, $message, $headers);
           echo "<button class='ero'><strong>&nbsp;Se a enviado un correo de confirmacion&nbsp;</strong></button>";
    }
    else{
        echo "<button class='ero'><strong>&nbsp;Este correo no corresponde a ningun usuario&nbsp;</strong></button>";
    }
}
?>