<?php

session_start();

require_once '../../controller/main.php';

$id = $_GET['emp'];

$sql = "DELETE FROM empleados WHERE id_empleados = '$id'";

$c = new Controller();
if ($_SESSION['role'] == 2) {
    header("location:../../views/empleados/consulta_emp.php?e=ok");
} else {
    if ($c->enviarQuery($sql)) {
        header("location:../../views/empleados/consulta_emp.php?d=ok");
    } else {
        $c->error = 'bdborrar';
        $c->Get404();
    };
};
