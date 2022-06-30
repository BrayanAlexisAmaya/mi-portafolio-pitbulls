
<?php
include_once "conexion.php";
session_start();
$id = $_SESSION["id"];
$eliminar = conexion::base()->prepare("DELETE FROM usu_pro WHERE id_usu='$id'");
$eliminar->execute();
echo "<script> window.location = 'carrito.php';</script>";
?>