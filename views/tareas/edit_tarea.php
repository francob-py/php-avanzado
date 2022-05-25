<?php require_once '../../controller/main.php';

$c = new Controller();

$c->GetDB();

$id = $_GET['id_tarea'];

$tarea = $_GET['tareas'];

$inicio = $_GET['inicio'];

$fin = $_GET['fin'];

$sql = "UPDATE tareas SET tarea = '$tarea', inicio= '$inicio', fin= '$fin' WHERE id_tareas = '$id'";

if ($c->enviarQuery($sql)) {
    header("location:../tareas/consulta_tarea.php?u=ok");
} else {
    echo "ERROR: " . $sql . "<br>" . $conn->error;
};
