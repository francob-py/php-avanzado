<?php
require_once '../../controller/main.php';

$c = new Controller();

echo ('<div class="col-md-12">
    <div class="table-responsive-sm">
        <table class="table table-hover table-striped">
            <tr class="table-info text-center">
                <th>NOMBRE</th>
                <th>APELLIDO</th>
                <th>DNI</th>
                <th>DIRECCIÓN</th>
                <th>CUIL</th>
                <th>EDITAR</th>
                <th>BORRAR</th>
                <th>EXPORTAR</th>
            </tr>

            <!-- CONTENIDO DE TABLA CON PHP -->
            <div>');

$c->get_data($data = "empleados");
echo (' 
                <!-- FIN CONTENIDO DE TABLA CON PHP -->
            </div>
        </table>
    </div>
</div>');
