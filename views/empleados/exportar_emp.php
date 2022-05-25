<?php

require_once '../../controller/main.php';

$c = new Controller();

$id = $_GET['emp'];

$sql = "SELECT * FROM empleados WHERE id_empleados = '$id'";

$registros = $c->enviarQuery($sql);

while (list($id, $nombre, $apellido, $dni, $direccion, $cuil) = mysqli_fetch_array($registros)) {

    $export = fopen("../export/export_emp.txt", "a");

    $export_individual = fopen("../export/" . "$id" . "$dni.txt", "w");

    $txt = "<div class='card' style='background-color:tomato;'> <h6> ORDEN: $id </h6> <h6>NOMBRE: $nombre </h6> <h6> APELLIDO: $apellido </h6> <h6> DNI: $dni </h6> <h6> DIRECCIÓN: $direccion </h6> <h6> CUIL: $cuil </h6><h3></div>";

    fwrite($export, $txt . "\n");

    fwrite($export_individual, $txt . "\n");

    fclose($export);

    fclose($export_individual);
};

header("location:../../views/empleados/export_view.php");
