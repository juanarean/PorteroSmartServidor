<?php
session_start();
session_destroy();

printf("Sesion cerrada correctamente");
//header("Location:info.php");
exit();

?>
