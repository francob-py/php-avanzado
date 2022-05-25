<?php
require_once '../../controller/main.php';

$c = new Controller();

$tarea = $_GET['tarea'];

$inicio = $_GET['inicio'];

$fin = $_GET['fin'];

$sql = "INSERT INTO tareas (tarea, inicio, fin ) VALUES ('$tarea','$inicio', '$fin')";

try {
    $c->enviarQuery($sql);

    header("location:agregar_tarea.php?e=ok");
} catch (Exception $e) {

    $c->error = 'bderror';

    $c->Get404();
}
