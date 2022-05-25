<?php require_once '../../controller/main.php';

$c = new Controller();

$c->GetHeader();

$c->GetDB();

$c->GetSidebar();
?>

<!-- Contenido  -->
<main class="page-content">
    <div class="container-fluid">
        <h2>ADMINISTRAR TAREAS</h2>
        <hr>
        <div class="row">
            <div class="form-group col-md-12">
                <p> LISTA DE TAREAS </p>
                <?php
                echo ($c->get_fecha_esp());
                ?>
            </div>
        </div>
        <div class="row" id='data_tareas'> </div>
        <div class="row col-md-12">
            <?php
            if (isset($_GET["export"])) {
                echo ("<h6 class='col-md-3 bg-info'> Listado exportado exitosamente <h6>");
            };
            if (isset($_GET["e"])) {
                echo ("<h6 class='col-md-3 bg-warning'> Debe ser Admin para borrar una Tarea <h6>");
            };
            ?>
        </div>
        <hr>
</main>

<!-- footer -->
<?php include("../includes/footer.php") ?>