<?php include("../../model/database.php");

require_once '../../controller/main.php';

$id = $_POST['id_emp'];

$nombre = $_POST['nombre_emp'];

$apellido = $_POST['apellido_emp'];

$dni = $_POST['dni_emp'];

$direccion = $_POST['direccion_emp'];

$cuil = $_POST['cuil_emp'];

$sql = "UPDATE empleados SET nombre = '$nombre', apellido= '$apellido', dni='$dni', direccion = '$direccion', cuil='$cuil' WHERE id_empleados = '$id'";

$c = new Controller();

if ($c->enviarQuery($sql)) {
    header("location:../../mostrar_contenido.php?u=ok");
} else {
    $c->error = 'bdborrar';
    $c->Get404();
};
