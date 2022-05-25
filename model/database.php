<?php
class Database extends mysqli
{
    private $server = 'localhost';

    private $username = 'root';

    private $password = '';

    private $database = 'pos_franco_brochero';

    private $conn;

    function GetConn()
    {

        $this->conn = mysqli_connect($this->server,  $this->username, $this->password, $this->database);

        if ($this->conn->connect_errno) {
            die("error de conexión: " . $this->conn->connect_error);
        } else {
            return $this->conn;
        }
    }
}
