<?php require_once '../../controller/main.php';

$c = new Controller();

$c->GetHeader();

$c->GetSidebar();

?>
<main class="page-content">
    <div class='container-fluid centrar-todo'>
        <h1 class="error"> ERROR</h1>
        <?php

        echo ($c->get_fecha_esp());


        echo ("<h5><strong> OOPS!! ALGO SALIO MAL </strong><h5>");


        ?>
        <img class='container' src="/views/img/error.png" alt="">
    </div>
</main>