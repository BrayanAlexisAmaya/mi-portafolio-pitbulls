<?php
session_start();
Session_unset();
unset($_SESSION);
Session_destroy();
echo "<script> window.location = 'principal.php';</script>";
?>
