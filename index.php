<?php

require_once './controller/main.php';

$c = new Controller();

$c->GetHeaderIndex();

$c->GetDBIndex();
?>
<main class="page-content">
    <div class="container-fluid">
        <h2 class="login">INGRESO AL SISTEMA</h2>
        <?php
        echo ($c->get_fecha_esp());
        echo ("Tu IP actual es : " . $c->get_client_ip());
        ?>
        <hr>
        <div class="row">
            <div class="col-md-4">
                <img src="/views/img/acceso_cliente.png" width="450" height="200">
                </img>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <form class="login form-login" action="../validar.php" method="post">
                    <div class="mb-3">
                        <label for="usuario">USUARIO</label>
                        <input class="form-control" type="text" name="usuario" id="usuario" placeholder="Nombre">
                    </div>
                    <div class="mb-3">
                        <label for="contrasena">CONTRASEÑA</label>
                        <input class="form-control" type="text" name="contrasena" id="contrasena" placeholder="Apellido">
                    </div>
                    <div class="mb-6" style="float: right;">
                        <input class="btn btn-success" type="submit" value="Ingresar">
                    </div>
                </form>
            </div>
        </div>
        <div>
            <?php
            if (isset($_GET["e"])) {
                echo ("<h5 class='col-md-6 text-danger'><strong> Compruebe su Usuario o Contraseña </strong><h5>");
            };
            ?>
        </div>
    </div>
    <hr>
</main>
<?php $c->GetFooterIndex(); ?>