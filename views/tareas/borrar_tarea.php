<?php

session_start();

require_once '../../controller/main.php';

$id = $_GET['tar'];

$sql = "DELETE FROM tareas WHERE id_tareas = '$id'";

$c = new Controller();
if ($_SESSION['role'] == 2) {
    header("location:../../views/tareas/consulta_tarea.php?e=ok");
} else {
    if ($c->enviarQuery($sql)) {
        header("location:../../views/tareas/consulta_tarea.php?d=ok");
    } else {
        $c->error = 'bdborrar';
        $c->Get404();
    };
};
