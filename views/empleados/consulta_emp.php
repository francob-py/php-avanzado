<?php require_once '../../controller/main.php';

$c = new Controller();

$c->GetHeader();

$c->GetDB();

$c->GetSidebar();
?>

<!-- Contenido  -->
<main class="page-content">
    <div class="container-fluid">
        <h2>ADMINISTRAR EMPLEADOS</h2>
        <hr>
        <div class="row">
            <div class="form-group col-md-12">
                <p> LISTA DE EMPLEADOS <a href='../../views/empleados/exportar_todos.php' type='button' class='btn btn-success fa fa-book' style='float:right;'> EXPORTAR LISTADO </a></p>
                <?php
                echo ($c->get_fecha_esp());
                ?>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
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
                        <?php

                        $c->get_data($data = 'empleados');

                        ?>
                        <!-- FIN CONTENIDO DE TABLA CON PHP -->

                        </tr>
                    </table>
                </div>
            </div>
        </div>
        <div class="row col-md-12">
            <?php
            if (isset($_GET["export"])) {
                echo ("<h6 class='col-md-3 bg-info'> Listado exportado exitosamente <h6>");
            };
            if (isset($_GET["e"])) {
                echo ("<h6 class='col-md-3 bg-warning'> Debe ser Admin para borrar un Empleado <h6>");
            };
            ?>
        </div>
    </div>
    <hr>
</main>

<!-- footer -->
<?php $c->GetFooter() ?>