<?php
require_once('../../controller/main.php');

$c = new Controller();

$c->GetDB();

?>
<?php

$sql = "SELECT * FROM empleados";

$registros = $c->enviarQuery($sql);

while (list($id, $nombre, $apellido, $dni, $direccion, $cuil) = mysqli_fetch_array($registros)) {

    $export = fopen("../../views/export/todos_emp.txt", "a");

    $txt = "<div class='card' style='background-color:tomato;'> <h6> ORDEN: $id </h6> <h6>NOMBRE: $nombre </h6> <h6> APELLIDO: $apellido </h6> <h6> DNI: $dni </h6> <h6> DIRECCIÓN: $direccion </h6> <h6> CUIL: $cuil </h6><h3></div><hr>";

    fwrite($export, $txt . "\n");

    fclose($export);
};

header("location:../../views/empleados/consulta_emp.php?export=ok");

?>