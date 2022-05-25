<?php
require_once '../../controller/main.php';

$c = new Controller();

$nombre = $_POST['nombre_emp'];

$apellido = $_POST['apellido_emp'];

$dni = $_POST['dni_emp'];

$direccion = $_POST['direccion_emp'];

$cuil = $_POST['cuil_emp'];

$sql = "INSERT INTO empleados (nombre, apellido, dni, direccion, cuil ) VALUES ('$nombre','$apellido', '$dni', '$direccion', '$cuil')";

try {
    $c->enviarQuery($sql);

    header("location:agregar_empleado.php?e=ok");
} catch (Exception $e) {

    $c->error = 'bderror';

    $c->Get404();
}
