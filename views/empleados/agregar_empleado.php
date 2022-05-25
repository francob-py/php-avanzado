<?php require_once '../../controller/main.php'; ?>
<?php
$c = new Controller();

$c->GetHeader();

$c->GetSidebar();

?>

<!-- Contenido  -->
<main class="page-content">
    <div class="container-fluid">
        <h2>AGREGAR EMPLEADO</h2>
        <hr>
        <div class="row">
            <div class="col-md-6" style="background-color:thistle;">
                <p> COMPLETE LOS SIGUIENTES CAMPOS </p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6" style="background-color:thistle;">
                <form action="../empleados/save_emp.php" method="post">
                    <div class="mb-3">
                        <label for="nombre_emp">NOMBRE</label>
                        <input class="form-control" type="text" name="nombre_emp" id="nombre_emp" placeholder="Nombre">
                    </div>
                    <div class="mb-3">
                        <label for="apellido_emp">APELLIDO</label>
                        <input class="form-control" type="text" name="apellido_emp" id="apellido_emp" placeholder="Apellido">
                    </div>
                    <div class="mb-3">
                        <label for="dni_emp">DNI</label>
                        <input class="form-control" type="text" name="dni_emp" id="dni_emp" placeholder="DNI">
                    </div>
                    <div class="mb-3">
                        <label for="direccion_emp">DIRECCIÓN</label>
                        <input class="form-control" type="text" name="direccion_emp" id="direccion_emp" placeholder="Dirección">
                    </div>
                    <div class="mb-3">
                        <label for="cuil_emp">CUIL</label>
                        <input class="form-control" type="text" name="cuil_emp" id="cuil_emp" placeholder="CUIL sin Guiones">
                    </div>
                    <div class="mb-6" style="float: right;">
                        <input class="btn btn-success" type="submit" value="Guardar">
                    </div>
                    <br>
                    <br>
                </form>

            </div>
        </div>
        <div>
            <?php
            if (isset($_GET["e"])) {
                echo ("<h5 class='col-md-3 bg-info'> Datos Guardados con éxito <h5>");
            };
            ?>
        </div>

    </div>

</main>
<!-- footer -->
<?php $c->GetFooter(); ?>