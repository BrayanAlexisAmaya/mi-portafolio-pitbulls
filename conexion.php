<?php
class conexion{
    
public static function base(){
   $nombre = "pitbulls";
   $clave = "";
   $charset = "utf8";
   $localhost = "localhost";
   $usuario = "root";
   try{
       $conexion = "mysql:host=".$localhost.";dbname=".$nombre.";charset=".$charset;
       $opciones = [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, PDO::ATTR_EMULATE_PREPARES => false];
       $pdo = new pdo($conexion,$usuario,$clave,$opciones);
       return $pdo;
   }
   catch(PDOexception $error){
       echo "no se pudo establecer la conexion: ".$error->Getmessage();
   }
}
}
?>