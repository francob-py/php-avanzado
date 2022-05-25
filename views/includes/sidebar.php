<?php
session_start();
if (!isset($_SESSION['usuario'])) {
    header("location: ../index.php");
}

?>

<body>
    <div class="page-wrapper chiller-theme toggled">
        <a id="show-sidebar" class="btn btn-sm btn-dark" href="#">
            <i class="fas fa-bars"></i>
        </a>
        <nav id="sidebar" class="sidebar-wrapper">
            <div class="sidebar-content">
                <div class="sidebar-brand">
                    <a href="#">PHP-MYSQL UTN</a>
                    <div id="close-sidebar">
                        <i class="fas fa-times"></i>
                    </div>
                </div>
                <div class="sidebar-header">
                    <div class="user-pic">
                        <img class="img-responsive img-rounded" src="../../views/img/avatar_chico.png" alt="User picture">
                    </div>
                    <div class="user-info">
                        <span class="user-name"><strong><?php echo ($_SESSION['usuario']) ?></strong></span>
                        <span class="user-role"><?php if ($_SESSION['role'] == 1) {
                                                    echo ("Administrador");
                                                } else {
                                                    echo ("Usuario");
                                                } ?></span>
                        <span class="user-status">
                            <i class="fa fa-circle"></i>
                            <span>Online</span>
                        </span>
                    </div>
                </div>
                <div class="sidebar-menu">
                    <ul>
                        <li class="header-menu">
                            <span>Inicio</span>
                        </li>
                        <li class="sidebar-dropdown">
                            <a href="#">
                                <i class="fa fa-tachometer-alt"></i>
                                <span>Panel de Control</span>
                            </a>
                            <div class="sidebar-submenu">
                                <ul>
                                    <li>
                                        <a href="../../mostrar_contenido.php">Panel General</a>
                                </ul>
                            </div>
                        </li>
                    </ul>
                </div>
                <!-- fin dashboard -->

                <!-- General -->
                <div class="sidebar-menu">
                    <ul>
                        <li class="header-menu">
                            <span>Administrar</span>
                        </li>
                        <li class="sidebar-dropdown">
                            <a href="#">
                                <i class="fa fa-child"></i>
                                <span>Empleados</span>
                            </a>
                            <div class="sidebar-submenu">
                                <ul>
                                    <li>
                                        <a href="../../views/empleados/agregar_empleado.php">Agregar
                                        </a>
                                    </li>
                                    <li>
                                        <a href="../../views/empleados/consulta_emp.php">Listado</a>
                                    </li>
                                    <li>
                                        <a href="../../views/empleados/export_view.php">Ultima Exportacion</a>
                                    </li>
                                    <li>
                                        <a href="../../views/empleados/export_view_all.php">Todo lo Exportado</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="sidebar-dropdown">
                            <a href="#">
                                <i class="fa fa-folder"></i>
                                <span>Tareas</span>
                            </a>
                            <div class="sidebar-submenu">
                                <ul>
                                    <li>
                                        <a href="../../views/tareas/agregar_tarea.php">Agregar
                                        </a>
                                    </li>
                                    <li>
                                        <a href="../../views/tareas/consulta_tarea.php">Listado</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- sidebar-footer  -->
            <div class="sidebar-footer " style="background-color:darkred;">
                <a href='../../views/includes/logout.php'>
                    <i class="fa fa-power-off"></i>
                </a>
            </div>
        </nav>