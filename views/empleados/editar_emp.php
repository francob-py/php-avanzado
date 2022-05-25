<?php include_once("../includes/header.php");

include_once("../includes/sidebar.php");

require_once '../../controller/main.php';

$c = new Controller();

$idemp = $_GET['emp'];

$sql = "SELECT * FROM empleados WHERE id_empleados = '$idemp'";

$datos  = $c->enviarQuery($sql);

$array = list($id, $nombre, $apellido, $dni, $direccion, $cuil) = mysqli_fetch_array($datos);
?>

<main class="page-content">
    <div class="container-fluid">
        <h2>EDITAR EMPLEADO</h2>
        <hr>
        <div class="row">
            <div class="col-md-6" style="background-color:thistle;">
                <p> ACTUALICE LOS SIGUIENTES CAMPOS </p>
            </div>
        </div>

        <div class="row">
            <div class="col-md-6" style="background-color:thistle;">
                <form action="../empleados/edit_emp.php" method="post">
                    <div class="mb-3">
                        <input class="form-control" type="hidden" name="id_emp" id="id_emp" value=<?php echo ("$idemp"); ?>>
                    </div>
                    <div class="mb-3">
                        <label for="nombre_emp">NOMBRE</label>
                        <input class="form-control" type="text" name="nombre_emp" id="nombre_emp" placeholder="Nombre" value=<?php echo ($array[1]); ?>>
                    </div>
                    <div class="mb-3">
                        <label for="apellido_emp">APELLIDO</label>
                        <input class="form-control" type="text" name="apellido_emp" id="apellido_emp" placeholder="Apellido" value=<?php echo ($array[2]); ?>>
                    </div>
                    <div class="mb-3">
                        <label for="dni_emp">DNI</label>
                        <input class="form-control" type="text" name="dni_emp" id="dni_emp" placeholder="DNI" value=<?php echo ($array[3]); ?>>
                    </div>
                    <div class="mb-3">
                        <label for="direccion_emp">DIRECCIÓN</label>
                        <input class="form-control" type="text" name="direccion_emp" id="direccion_emp" placeholder="Dirección" value=<?php echo ($array[4]); ?>>
                    </div>
                    <div class="mb-3">
                        <label for="cuil_emp">CUIL</label>
                        <input class="form-control" type="text" name="cuil_emp" id="cuil_emp" placeholder="CUIL sin Guiones" value=<?php echo ($array[5]); ?>>
                    </div>
                    <div class="mb-6" style="float: right;">
                        <input class="btn btn-success" type="submit" value="Actualizar">
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
<?php include_once("../includes/footer.php") ?>