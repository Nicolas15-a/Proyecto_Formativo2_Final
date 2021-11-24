<?php

class Conexion
{
    public static function conectar()
    {
        $servername="127.0.0.1";
        $username = "root";
        $password = "";
        $database = "desarrollo";

        $conn = mysqli_connect($servername, $username, $password, $database);

        if(!$conn){
            echo "Error: No se pudo conectar a MySQL.". PHP_EOL;
            exit;
        }
        return $conn;
    }
}

?>