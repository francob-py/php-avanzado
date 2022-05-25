<?php require_once '../../controller/main.php';

$c = new Controller();

$c->GetHeader();

$c->GetDB();

$c->GetSidebar();
?>
<!-- Contenido  -->
<main class="page-content">
    <div class="container-fluid">
        <h2>EDITAR TAREA</h2>
        <hr>
        <div class="row">
            <div class="col-md-6" style="background-color:thistle;">
                <p> ACTUALICE LOS SIGUIENTES CAMPOS </p>
            </div>
        </div>
        <?php $id = $_GET['tar']; ?>
        <?php $tarea = $_GET['tarea']; ?>
        <?php $inicio = $_GET['inicio']; ?>
        <?php $fin = $_GET['fin']; ?>
        <div class="row">
            <div class="col-md-6" style="background-color:thistle;">
                <form action="../tareas/edit_tarea.php" method="get">
                    <div class="mb-3">
                        <input class="form-control" type="hidden" name="id_tarea" id="id_tarea" value=<?php echo ("$id") ?>>
                    </div>
                    <div class="mb-3">
                        <label for="tareas">TAREA</label>
                        <input class="form-control" type="text" name="tareas" id="tareas" value=<?php echo ("$tarea") ?> placeholder="tarea">
                    </div>
                    <div class="mb-3">
                        <label for="inicio">INICIO</label>
                        <input class="form-control" type="text" name="inicio" id="inicio" value=<?php echo ("$inicio") ?> placeholder="inicio">
                    </div>
                    <div class="mb-3">
                        <label for="fin">FIN</label>
                        <input class="form-control" type="text" name="fin" id="fin" value=<?php echo ("$fin") ?> placeholder="fin">
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
<?php $c->GetFooter() ?>