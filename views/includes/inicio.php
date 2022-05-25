<?php

require_once './controller/main.php';

$c = new Controller();

$c->GetHeaderIndex();

$c->GetDBIndex();

$c->GetSidebarIndex();
?>

<main class="page-content">
    <div class="container-fluid">
        <h2>PANEL DE CONTROL</h2>
        <?php
        echo ($c->get_fecha_esp());
        echo ("Tu IP actual es : " . $c->get_client_ip());
        ?>
    </div>
    <div class="container-fluid">
        <h5>EMPLEADOS</h5>
        <hr>
        <div class="row" id='data_emp'>
        </div>
    </div>
    <div class="container-fluid">
        <h5>TAREAS</h5>
        <hr>
        <div class="row" id='data_tareas'>
        </div>
    </div>
</main>

<?php
$c->GetFooterIndex();
?>