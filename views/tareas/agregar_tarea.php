<?php require_once '../../controller/main.php'; ?>
<?php
$c = new Controller();

$c->GetHeader();

$c->GetSidebar();

?>

<main class="page-content">
    <div class="container-fluid">
        <h2>AGREGAR TAREAS</h2>
        <hr>
        <div class="row">
            <div class="col-md-6" style="background-color:thistle;">
                <p> COMPLETE LOS SIGUIENTES CAMPOS </p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6" style="background-color:thistle;">
                <form action="./save_tarea.php" method="GET">
                    <div class="mb-3">
                        <label for="tarea">TAREA</label>
                        <input class="form-control" type="text" name="tarea" id="tarea" placeholder="Tarea">
                    </div>
                    <div class="mb-3">
                        <label for="inicio">FECHA INICIO</label>
                        <input class="form-control" type="text" name="inicio" id="inicio" placeholder="AAAA/MM/DD">
                    </div>
                    <div class="mb-3">
                        <label for="">FECHA FINALIZACION</label>
                        <input class="form-control" type="text" name="fin" id="fin" placeholder="AAAA/MM/DD">
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