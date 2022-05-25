<!-- header -->
<?php include("../includes/header.php") ?>

<!-- sidear -->
<?php include("../includes/sidebar.php") ?>

<!-- Contenido  -->
<main class="page-content">
    <div class="container-fluid">
        <h2>ULTIMOS DATOS EXPORTADOS</h2>
        <span class="badge badge-pill badge-success">Datos exportados a la carpeta export</span>
        <hr>
        <div class="row">
            <div class="col-md-6">
                <?php
                $ruta = "../export/export_emp.txt";
                if (file_exists($ruta)) {
                    $archivo = fopen($ruta, "r");
                    $num_lineas = 0;
                    $caracteres = 0;
                    while (!feof($archivo)) {
                        //si extraigo una línea del archivo y no es false
                        if ($linea = fgets($archivo)) {
                            //acumulo una en la variable número de líneas
                            $num_lineas++;
                            //acumulo el número de caracteres de esta línea
                            $caracteres += strlen($linea);
                        }
                    };
                    $ultimo = file($ruta);
                    echo $ultimo[$num_lineas - 1];
                } else {
                    echo ("<h5> UPS PARECE QUE NO HAY DATOS PARA MOSTRAR </h5>");
                };
                ?>
            </div>
        </div>
        <hr>
</main>
<!-- footer -->
<?php include("../includes/footer.php") ?>