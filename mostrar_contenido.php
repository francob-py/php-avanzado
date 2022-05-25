<?php

//LLAMO AL CONTROLLER

require_once "controller/main.php";

// CREO OBJETO - INSTANCIO CLASE Controller_Index
$plantilla_index = new Controller();

//EJECUTO METODO QUE CARGA LA PLANTILLA

$plantilla_index->GetIndex();
