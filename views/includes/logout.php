<?php
// Eliminar todas las variables de sesión
session_start();

session_destroy();

header("location:../../index.php");
?>;