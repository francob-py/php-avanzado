<?php require_once("../../controller/main.php");
$c = new Controller();
$c->GetHeader();
$c->GetDB();
$c->GetSidebar();
?>
<main class="page-content">
    <div class="container-fluid">
        <h2>ULTIMOS DATOS EXPORTADOS</h2>
        <span class="badge badge-pill badge-success">Datos exportados a la carpeta export</span>
        <hr>
        <div class="row">
            <div class="col-md-6">
                <?php
                $ruta = "../export/todos_emp.txt";
                if (file_exists($ruta)) {
                    $archivo = fopen($ruta, "r");
                    $contenido = fread($archivo, filesize($ruta));
                    echo $contenido;
                    fclose($archivo);
                } else {
                    echo ("<h5> UPS PARECE QUE NO HAY DATOS PARA MOSTRAR </h5>");
                }
                ?>
            </div>

        </div>
        <hr>
</main>
<!-- footer -->
<?php $c->GetFooter() ?>