<?php
require_once '../../controller/main.php';

$c = new Controller();

echo ('<div class="col-md-12">
    <div class="table-responsive-sm">
        <table class="table table-hover table-striped">
            <tr class="table-success text-center">
                <th>TAREA</th>
                <th>INICIO</th>
                <th>FIN</th>
                <th>EDITAR</th>
                <th>BORRAR</th>
                <th>EXPORTAR</th>
            </tr>

            <!-- CONTENIDO DE TABLA CON PHP -->
            <div>');

$c->get_data_tareas($data = "tareas");
echo (' 
                <!-- FIN CONTENIDO DE TABLA CON PHP -->
            </div>
        </table>
    </div>
</div>');
