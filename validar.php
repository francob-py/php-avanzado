<?php session_start();

require_once './controller/main.php';

$c = new Controller();

$usuario = $_POST['usuario'];

$contrasena = $_POST['contrasena'];

$sql = "SELECT * FROM usuarios WHERE nombre_usuario = '$usuario'";


$registros = $c->enviarQuery($sql, $i = 'index');

// compruebo si la consulta fue válida
if (mysqli_num_rows($registros) == 0) {
    header("location:../index.php?e=ok");
};

// valida la contraseña
try {
    while (list($id, $user, $pass, $role) = mysqli_fetch_array($registros)) {
        $_SESSION["usuario"] = $user;
        $_SESSION["role"] = $role;
        if ($contrasena == $pass) {
            header("location:../mostrar_contenido.php");
        } else {
            header("location:../index.php?e=ok");
        };
    };
} catch (Exception $e) {
    echo ($e);
};
