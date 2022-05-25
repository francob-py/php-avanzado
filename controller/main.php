<?php

class Controller
{
    private $fecha_esp;
    private $conn;
    private $state;
    public $error;

    public function GetIndex()
    {
        include("./views/includes/inicio.php");
    }

    public function Get404()
    {
        include("../../views/includes/404.php");
    }

    public function GetHeader()
    {
        include("../../views/includes/header.php");
    }
    public function GetDB()
    {
        require_once '../../model/database.php';
    }
    public function GetDBIndex()
    {
        require_once './model/database.php';
    }

    public function GetHeaderIndex()
    {
        include("./views/includes/header.php");
    }

    public function GetFooter()
    {
        include("../../views/includes/footer.php");
    }
    public function GetFooterIndex()
    {
        include("./views/includes/footer.php");
    }

    public function GetSidebar()
    {
        include("../../views/includes/sidebar.php");
    }

    public function GetSidebarIndex()
    {
        include("./views/includes/sidebar.php");
    }

    public function GetLogout()
    {
        include("../../views/includes/logout.php");
    }

    public function enviarQuery($sql, $i = '')
    {
        if ($i == 'index') {
            $this->GetDBIndex();
            $db = new Database();
            $this->conn = $db->GetConn();
            $this->state = mysqli_query($this->conn, $sql);
            return $this->state;
        } else {
            $this->GetDB();
            $db = new Database();
            $this->conn = $db->GetConn();
            $this->state = mysqli_query($this->conn, $sql);
            return $this->state;
        }
    }

    public function get_fecha_esp()
    {
        date_default_timezone_set("America/Argentina/Buenos_Aires");
        setlocale(LC_ALL, "es_ES");
        $dias = array("Lunes", "Martes", "Miercoles", "Jueves", "Viernes", "Sabado", "Domingo");
        $meses = array("Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre");
        $mes = $meses[date('n') - 1];
        $dia = $dias[date('N') - 1];
        $this->fecha_esp = "<p>" . strftime("$dia %d de $mes %Y %X") . "</p>";
        return $this->fecha_esp;
    }

    public function get_data($data)
    {
        $this->GetDB();

        $db = new Database();

        $conn = $db->GetConn();

        $sql = "SELECT * FROM $data ORDER BY id_$data DESC LIMIT 5";

        $registros = mysqli_query($conn, $sql);


        while (list($id, $nombre, $apellido, $dni, $direccion, $cuil) = mysqli_fetch_array($registros)) {
            echo ("<tr class='text-center'>
            <td id='nombre_emp'> $nombre </td>
            <td id='apellido_emp'> $apellido</td>
            <td id='dni_emp'> $dni </td>
            <td id='direccion_emp'> $direccion </td>
            <td id='cuil_emp'> $cuil </td>
            <td> <a href='../../views/$data/editar_emp.php?emp=$id' type='button' class='btn btn-info fa fa-edit' style='font-size:14px'></a></td>
            <td> <a href='../../views/$data/borrar_emp.php?emp=$id' type='button' class='btn btn-danger fa fa-trash-alt'></a></td> 
            <td> <a href='../../views/$data/exportar_emp.php?emp=$id' type='button' class='btn btn-success fa fa-book'></a></td></tr>");
        };
    }

    public function get_data_tareas($data)
    {
        $this->GetDB();

        $db = new Database();

        $conn = $db->GetConn();

        $sql = "SELECT * FROM $data ORDER BY id_$data DESC LIMIT 5";

        $registros = mysqli_query($conn, $sql);


        while (list($id, $tarea, $inicio, $fin) = mysqli_fetch_array($registros)) {
            echo ("<tr class='text-center'>
            <td> $tarea </td>
            <td> $inicio</td>
            <td> $fin </td>
            <td> <a href='../../views/$data/editar_tarea.php?tar=$id&tarea=$tarea&inicio=$inicio&fin=$fin' type='button' class='btn btn-info fa fa-edit' style='font-size:14px'></a></td>
            <td> <a href='../../views/$data/borrar_tarea.php?tar=$id' type='button' class='btn btn-danger fa fa-trash-alt'></a></td> 
            <td> <a href='../../views/$data/exportar_tarea.php?tar=$id' type='button' class='btn btn-success fa fa-book'></a></td> 
            </tr>");
        };
    }

    function get_client_ip()
    {
        $ipaddress = '';
        if (getenv('HTTP_CLIENT_IP'))
            $ipaddress = getenv('HTTP_CLIENT_IP');
        else if (getenv('HTTP_X_FORWARDED_FOR'))
            $ipaddress = getenv('HTTP_X_FORWARDED_FOR');
        else if (getenv('HTTP_X_FORWARDED'))
            $ipaddress = getenv('HTTP_X_FORWARDED');
        else if (getenv('HTTP_FORWARDED_FOR'))
            $ipaddress = getenv('HTTP_FORWARDED_FOR');
        else if (getenv('HTTP_FORWARDED'))
            $ipaddress = getenv('HTTP_FORWARDED');
        else if (getenv('REMOTE_ADDR'))
            $ipaddress = getenv('REMOTE_ADDR');
        else
            $ipaddress = 'UNKNOWN';
        return $ipaddress;
    }
}
